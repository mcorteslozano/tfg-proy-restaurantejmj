<?php

namespace App\Controller;

use App\Form\UsuarioType;
use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, UsuarioRepository $usuariosRepositorio)
    {

        $user = new Usuario();
        $form = $this->createForm(UsuarioType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $foto = $form->get('foto')->getData();
            if($foto){
                $nombreOriginal = pathinfo($foto->getClientOriginalName(),PATHINFO_FILENAME);

                $usuarios = $usuariosRepositorio->findAll();
                $id = $usuarios[count($usuarios)-1]->getId()+1;
                $newFilename = $nombreOriginal.$id.'.'.$foto->guessExtension();
                try{
                    $foto->move(
                        $this->getParameter('fotos_dir'),
                        $newFilename
                    );
                }catch(FileException $e){

                }
                $user->setFoto($newFilename);
            }

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('articulo_index');
        }

        return $this->render(
            'register/index.html.twig',
            array('form' => $form->createView())
        );
    }
}