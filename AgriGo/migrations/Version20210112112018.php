<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210112112018 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE producteur (id INT AUTO_INCREMENT NOT NULL, mail_producteur VARCHAR(255) NOT NULL, nom_producteur VARCHAR(20) NOT NULL, prenom_producteur VARCHAR(20) NOT NULL, nom_rue VARCHAR(70) NOT NULL, num_rue VARCHAR(4) NOT NULL, code_postal VARCHAR(5) NOT NULL, ville_producteur VARCHAR(100) NOT NULL, nom_magasin VARCHAR(100) DEFAULT NULL, num_tel_producteur VARCHAR(10) DEFAULT NULL, image_producteur VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, type_produit VARCHAR(60) NOT NULL, image_produit VARCHAR(200) NOT NULL, categorie_produit VARCHAR(10) NOT NULL, description_produit LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE variete (id INT AUTO_INCREMENT NOT NULL, type_variete_id INT NOT NULL, producteur_variete_id INT NOT NULL, nom_variete VARCHAR(100) NOT NULL, image_variete VARCHAR(100) NOT NULL, INDEX IDX_2CD7CD587F0E8245 (type_variete_id), INDEX IDX_2CD7CD58A9130157 (producteur_variete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE variete ADD CONSTRAINT FK_2CD7CD587F0E8245 FOREIGN KEY (type_variete_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE variete ADD CONSTRAINT FK_2CD7CD58A9130157 FOREIGN KEY (producteur_variete_id) REFERENCES producteur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE variete DROP FOREIGN KEY FK_2CD7CD58A9130157');
        $this->addSql('ALTER TABLE variete DROP FOREIGN KEY FK_2CD7CD587F0E8245');
        $this->addSql('DROP TABLE producteur');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE variete');
    }
}
