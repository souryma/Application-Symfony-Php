<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201208074752 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE variete (id INT AUTO_INCREMENT NOT NULL, type_variete_id INT NOT NULL, nom_variete VARCHAR(100) NOT NULL, image_variete VARCHAR(100) NOT NULL, INDEX IDX_2CD7CD587F0E8245 (type_variete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE variete ADD CONSTRAINT FK_2CD7CD587F0E8245 FOREIGN KEY (type_variete_id) REFERENCES produit (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE variete');
    }
}
