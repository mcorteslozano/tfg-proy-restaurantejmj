<?php

namespace App\Controller;
use App\Entity\Usuario;
use App\Form\UsuarioType;
use App\Repository\UsuarioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/usuario")
 */
class UsuarioController extends AbstractController
{
    /**
     * @Route("/", name="usuario_index", methods={"GET"})
     */
    public function index(UsuarioRepository $usuarioRepository): Response
    {
        return $this->render('usuario/index.html.twig', [
            'usuarios' => $usuarioRepository->findAll(),
        ]);
    }
    /**
     * @Route("/{id}", name="usuario_show", methods={"GET"})
     */
    public function show(Usuario $usuario): Response
    {
        return $this->render('usuario/show.html.twig', [
            'usuario' => $usuario,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="usuario_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Usuario $usuario, UserPasswordEncoderInterface $passwordEncoder, UsuarioRepository $usuarioRepository): Response
    {
        $form = $this->createForm(UsuarioType::class, $usuario);
        $form->handleRequest($request);
        $filesystem = new Filesystem();
        
        if ($form->isSubmitted() && $form->isValid()) {

          /*  $password =  $form->get('password')->getData();
            if($password){
                $passwordEncode = $passwordEncoder->encodePassword($usuario, $form->get('password')->getData());
                $usuario->setPassword($passwordEncode);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($usuario);
                $entityManager->flush();
            }  else {
                $usuario->setPassword($contraseña); 
            }*/
            
            $brochureFile = $form->get('foto')->getData();
            if ($brochureFile) {

                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $id = $usuario->getId();
                
                $newFilename = $originalFilename.$id.'.'.$brochureFile->guessExtension();

                $filesystem->remove($this->getParameter('fotos_dir').'/'.$usuario->getFoto());

                try {
                    $brochureFile->move(
                        $this->getParameter('fotos_dir'),
                        $newFilename
                    );
                    $usuario->setFoto($newFilename);
                    $entityManager = $this->getDoctrine()->getManager();

                    $entityManager->persist($usuario);
                    $entityManager->flush();

                } catch (FileException $e) {

                }
            }
            
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('articulo_index');
        }

        return $this->render('usuario/edit.html.twig', [
            'usuario' => $usuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="usuario_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Usuario $usuario): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usuario->getId(), $request->request->get('_token'))) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($usuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('usuario_index');
    }
}