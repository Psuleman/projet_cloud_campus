<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220704092818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achat (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, type VARCHAR(255) NOT NULL, date_achat DATE NOT NULL, quantite INT NOT NULL, expedier TINYINT(1) NOT NULL, date_expedition DATE DEFAULT NULL, statut_achat VARCHAR(255) NOT NULL, INDEX IDX_26A98456F347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, categorie_fr VARCHAR(255) NOT NULL, categorie_en VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(100) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grille_taille (id INT AUTO_INCREMENT NOT NULL, grille_taille VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matiere (id INT AUTO_INCREMENT NOT NULL, matiere VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit_entreprise (id INT AUTO_INCREMENT NOT NULL, sous_categorie_id INT NOT NULL, univers_id INT NOT NULL, taille_id INT NOT NULL, sku INT NOT NULL, date_arrivee DATE NOT NULL, date_ajout DATE NOT NULL, mode_acquisition VARCHAR(255) NOT NULL, nom_produit_fr VARCHAR(255) NOT NULL, nom_produit_en VARCHAR(255) NOT NULL, description_fr VARCHAR(255) NOT NULL, description_en VARCHAR(255) NOT NULL, coupe VARCHAR(255) DEFAULT NULL, entretien VARCHAR(255) DEFAULT NULL, couleur VARCHAR(255) NOT NULL, taille_mannequin VARCHAR(255) DEFAULT NULL, quantite_stock INT NOT NULL, matiere1 VARCHAR(255) NOT NULL, pourcentage_matiere1 INT NOT NULL, matiere2 VARCHAR(255) DEFAULT NULL, pourcentage_matiere2 INT DEFAULT NULL, INDEX IDX_A421C36D365BF48 (sous_categorie_id), INDEX IDX_A421C36D1CF61C0B (univers_id), INDEX IDX_A421C36DFF25611A (taille_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit_fournisseur (id INT AUTO_INCREMENT NOT NULL, saison_id INT NOT NULL, reference_produit VARCHAR(255) NOT NULL, annee_sortie INT NOT NULL, taille VARCHAR(255) NOT NULL, INDEX IDX_48868EB6F965414C (saison_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saison (id INT AUTO_INCREMENT NOT NULL, code INT NOT NULL, saison VARCHAR(100) NOT NULL, abreviation VARCHAR(2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_categorie (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, sous_categorie_fr VARCHAR(255) NOT NULL, sous_categorie_en VARCHAR(255) NOT NULL, INDEX IDX_52743D7BBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taille (id INT AUTO_INCREMENT NOT NULL, grille_taille_id INT NOT NULL, taille VARCHAR(255) NOT NULL, INDEX IDX_76508B386DF3F5D4 (grille_taille_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE univers (id INT AUTO_INCREMENT NOT NULL, univers_fr VARCHAR(255) NOT NULL, univers_en VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, profil_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456F347EFB FOREIGN KEY (produit_id) REFERENCES produit_entreprise (id)');
        $this->addSql('ALTER TABLE produit_entreprise ADD CONSTRAINT FK_A421C36D365BF48 FOREIGN KEY (sous_categorie_id) REFERENCES sous_categorie (id)');
        $this->addSql('ALTER TABLE produit_entreprise ADD CONSTRAINT FK_A421C36D1CF61C0B FOREIGN KEY (univers_id) REFERENCES univers (id)');
        $this->addSql('ALTER TABLE produit_entreprise ADD CONSTRAINT FK_A421C36DFF25611A FOREIGN KEY (taille_id) REFERENCES taille (id)');
        $this->addSql('ALTER TABLE produit_fournisseur ADD CONSTRAINT FK_48868EB6F965414C FOREIGN KEY (saison_id) REFERENCES saison (id)');
        $this->addSql('ALTER TABLE sous_categorie ADD CONSTRAINT FK_52743D7BBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE taille ADD CONSTRAINT FK_76508B386DF3F5D4 FOREIGN KEY (grille_taille_id) REFERENCES grille_taille (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sous_categorie DROP FOREIGN KEY FK_52743D7BBCF5E72D');
        $this->addSql('ALTER TABLE taille DROP FOREIGN KEY FK_76508B386DF3F5D4');
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456F347EFB');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649275ED078');
        $this->addSql('ALTER TABLE produit_fournisseur DROP FOREIGN KEY FK_48868EB6F965414C');
        $this->addSql('ALTER TABLE produit_entreprise DROP FOREIGN KEY FK_A421C36D365BF48');
        $this->addSql('ALTER TABLE produit_entreprise DROP FOREIGN KEY FK_A421C36DFF25611A');
        $this->addSql('ALTER TABLE produit_entreprise DROP FOREIGN KEY FK_A421C36D1CF61C0B');
        $this->addSql('DROP TABLE achat');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE grille_taille');
        $this->addSql('DROP TABLE matiere');
        $this->addSql('DROP TABLE produit_entreprise');
        $this->addSql('DROP TABLE produit_fournisseur');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE saison');
        $this->addSql('DROP TABLE sous_categorie');
        $this->addSql('DROP TABLE taille');
        $this->addSql('DROP TABLE univers');
        $this->addSql('DROP TABLE user');
    }
}
