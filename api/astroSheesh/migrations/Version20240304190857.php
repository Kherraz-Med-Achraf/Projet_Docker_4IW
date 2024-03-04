<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240304190857 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE todos_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE todolist_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE todolist (id INT NOT NULL, name VARCHAR(255) NOT NULL, done BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE todos');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE todolist_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE todos_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE todos (id SERIAL NOT NULL, title VARCHAR(255) NOT NULL, done BOOLEAN DEFAULT false NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE todolist');
    }
}
