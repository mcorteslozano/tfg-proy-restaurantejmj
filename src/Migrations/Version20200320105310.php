<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320105310 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE articulo (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, precio DOUBLE PRECISION NOT NULL, existencias INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE linea_pedido (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_articulo_id INTEGER DEFAULT NULL, id_pedido_id INTEGER DEFAULT NULL, unidades INTEGER NOT NULL, precio_linea DOUBLE PRECISION NOT NULL)');
        $this->addSql('CREATE INDEX IDX_183C316535AEE23E ON linea_pedido (id_articulo_id)');
        $this->addSql('CREATE INDEX IDX_183C3165C861D91D ON linea_pedido (id_pedido_id)');
        $this->addSql('CREATE TABLE pedido (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_proveedor_id INTEGER DEFAULT NULL, fecha_pedido DATE NOT NULL, fecha_entrega DATE NOT NULL)');
        $this->addSql('CREATE INDEX IDX_C4EC16CEE8F12801 ON pedido (id_proveedor_id)');
        $this->addSql('CREATE TABLE proveedor (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, codigo_postal INTEGER NOT NULL, localidad VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telefono INTEGER NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE articulo');
        $this->addSql('DROP TABLE linea_pedido');
        $this->addSql('DROP TABLE pedido');
        $this->addSql('DROP TABLE proveedor');
    }
}
