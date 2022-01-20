<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220120082808 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B88D0EB82 FOREIGN KEY (candidat_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866FBB0859F1 FOREIGN KEY (recruteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD discr VARCHAR(255) NOT NULL, ADD titre VARCHAR(255) DEFAULT NULL, ADD date_naissance DATE DEFAULT NULL, ADD etat_civil VARCHAR(255) DEFAULT NULL, ADD experience VARCHAR(255) DEFAULT NULL, ADD ville VARCHAR(255) DEFAULT NULL, ADD secteur VARCHAR(255) DEFAULT NULL, ADD lng DOUBLE PRECISION DEFAULT NULL, ADD lat DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B88D0EB82');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866FBB0859F1');
        $this->addSql('ALTER TABLE user DROP discr, DROP titre, DROP date_naissance, DROP etat_civil, DROP experience, DROP ville, DROP secteur, DROP lng, DROP lat');
    }
}
