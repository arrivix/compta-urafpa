<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111161754 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE annee_ligne_budget DROP FOREIGN KEY FK_3D403072543EC5F0');
        $this->addSql('ALTER TABLE ligne_budget_time_montant DROP FOREIGN KEY FK_DDD8462E543EC5F0');
        $this->addSql('ALTER TABLE annee_ligne_budget DROP FOREIGN KEY FK_3D403072F94EA930');
        $this->addSql('ALTER TABLE ligne_budget_laboratory_project DROP FOREIGN KEY FK_AED8E790F94EA930');
        $this->addSql('DROP TABLE annee');
        $this->addSql('DROP TABLE annee_ligne_budget');
        $this->addSql('DROP TABLE ligne_budget');
        $this->addSql('DROP TABLE ligne_budget_laboratory_project');
        $this->addSql('DROP TABLE ligne_budget_time_montant');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE annee (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL COLLATE utf8mb4_unicode_ci, description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, active TINYINT(1) NOT NULL, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annee_ligne_budget (annee_id INT NOT NULL, ligne_budget_id INT NOT NULL, INDEX IDX_3D403072543EC5F0 (annee_id), INDEX IDX_3D403072F94EA930 (ligne_budget_id), PRIMARY KEY(annee_id, ligne_budget_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_budget (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(40) NOT NULL COLLATE utf8mb4_unicode_ci, description VARCHAR(200) DEFAULT NULL COLLATE utf8mb4_unicode_ci, create_time DATETIME NOT NULL, date_ouverture DATE NOT NULL, date_fin DATE DEFAULT NULL, create_user INT DEFAULT NULL, modification_user INT DEFAULT NULL, modification_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_budget_laboratory_project (ligne_budget_id INT NOT NULL, laboratory_project_id INT NOT NULL, INDEX IDX_AED8E790F94EA930 (ligne_budget_id), INDEX IDX_AED8E7905DEB71D1 (laboratory_project_id), PRIMARY KEY(ligne_budget_id, laboratory_project_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_budget_time_montant (id INT AUTO_INCREMENT NOT NULL, annee_id INT NOT NULL, montant NUMERIC(10, 2) NOT NULL, begin_date DATE DEFAULT NULL, annee_begin_date TINYINT(1) NOT NULL, end_date DATE DEFAULT NULL, annee_end_date TINYINT(1) DEFAULT NULL, INDEX IDX_DDD8462E543EC5F0 (annee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annee_ligne_budget ADD CONSTRAINT FK_3D403072543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annee_ligne_budget ADD CONSTRAINT FK_3D403072F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_laboratory_project ADD CONSTRAINT FK_AED8E7905DEB71D1 FOREIGN KEY (laboratory_project_id) REFERENCES laboratory_project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_laboratory_project ADD CONSTRAINT FK_AED8E790F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_time_montant ADD CONSTRAINT FK_DDD8462E543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id)');
    }
}
