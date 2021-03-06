<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210318092947 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, usuari_id INT NOT NULL, nom VARCHAR(255) NOT NULL, cognoms VARCHAR(255) NOT NULL, telefon BIGINT NOT NULL, UNIQUE INDEX UNIQ_6AB5B4715F263030 (usuari_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categoria (id INT AUTO_INCREMENT NOT NULL, descripcio VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE empresa (id INT AUTO_INCREMENT NOT NULL, usuari_id INT NOT NULL, nom VARCHAR(255) NOT NULL, tipus VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, correu VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B8D75A505F263030 (usuari_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oferta (id INT AUTO_INCREMENT NOT NULL, categoria_id INT NOT NULL, empresa_id INT NOT NULL, titol VARCHAR(255) NOT NULL, descripcio VARCHAR(255) NOT NULL, data DATE NOT NULL, ubicacio VARCHAR(255) NOT NULL, estat VARCHAR(255) NOT NULL, INDEX IDX_7479C8F23397707A (categoria_id), INDEX IDX_7479C8F2521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oferta_candidat (oferta_id INT NOT NULL, candidat_id INT NOT NULL, INDEX IDX_BC759CA0FAFBF624 (oferta_id), INDEX IDX_BC759CA08D0EB82 (candidat_id), PRIMARY KEY(oferta_id, candidat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B4715F263030 FOREIGN KEY (usuari_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE empresa ADD CONSTRAINT FK_B8D75A505F263030 FOREIGN KEY (usuari_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE oferta ADD CONSTRAINT FK_7479C8F23397707A FOREIGN KEY (categoria_id) REFERENCES categoria (id)');
        $this->addSql('ALTER TABLE oferta ADD CONSTRAINT FK_7479C8F2521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE oferta_candidat ADD CONSTRAINT FK_BC759CA0FAFBF624 FOREIGN KEY (oferta_id) REFERENCES oferta (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE oferta_candidat ADD CONSTRAINT FK_BC759CA08D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oferta_candidat DROP FOREIGN KEY FK_BC759CA08D0EB82');
        $this->addSql('ALTER TABLE oferta DROP FOREIGN KEY FK_7479C8F23397707A');
        $this->addSql('ALTER TABLE oferta DROP FOREIGN KEY FK_7479C8F2521E1991');
        $this->addSql('ALTER TABLE oferta_candidat DROP FOREIGN KEY FK_BC759CA0FAFBF624');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B4715F263030');
        $this->addSql('ALTER TABLE empresa DROP FOREIGN KEY FK_B8D75A505F263030');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE categoria');
        $this->addSql('DROP TABLE empresa');
        $this->addSql('DROP TABLE oferta');
        $this->addSql('DROP TABLE oferta_candidat');
        $this->addSql('DROP TABLE `user`');
    }
}
