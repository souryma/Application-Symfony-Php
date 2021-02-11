<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210112080147 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE producteur (id INT AUTO_INCREMENT NOT NULL, mail_producteur VARCHAR(255) NOT NULL, nom_producteur VARCHAR(20) NOT NULL, prenom_producteur VARCHAR(20) NOT NULL, nom_rue VARCHAR(70) NOT NULL, num_rue VARCHAR(4) NOT NULL, code_postal VARCHAR(5) NOT NULL, ville_producteur VARCHAR(100) NOT NULL, nom_magasin VARCHAR(100) DEFAULT NULL, num_tel_producteur VARCHAR(10) DEFAULT NULL, image_producteur VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE variete ADD producteur_variete_id INT NOT NULL');
        $this->addSql('ALTER TABLE variete ADD CONSTRAINT FK_2CD7CD58A9130157 FOREIGN KEY (producteur_variete_id) REFERENCES producteur (id)');
        $this->addSql('CREATE INDEX IDX_2CD7CD58A9130157 ON variete (producteur_variete_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE variete DROP FOREIGN KEY FK_2CD7CD58A9130157');
        $this->addSql('DROP TABLE producteur');
        $this->addSql('DROP INDEX IDX_2CD7CD58A9130157 ON variete');
        $this->addSql('ALTER TABLE variete DROP producteur_variete_id');
    }
}
