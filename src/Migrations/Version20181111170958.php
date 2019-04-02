<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111170958 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE annee_lign_budget (ligne_budget_id INT NOT NULL, annee_id INT NOT NULL, INDEX IDX_439DBC19F94EA930 (ligne_budget_id), INDEX IDX_439DBC19543EC5F0 (annee_id), PRIMARY KEY(ligne_budget_id, annee_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annee_lign_budget ADD CONSTRAINT FK_439DBC19F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annee_lign_budget ADD CONSTRAINT FK_439DBC19543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE annee_ligne_budget');
        $this->addSql('DROP TABLE ligne_budget_annee');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE annee_ligne_budget (annee_id INT NOT NULL, ligne_budget_id INT NOT NULL, INDEX IDX_3D403072543EC5F0 (annee_id), INDEX IDX_3D403072F94EA930 (ligne_budget_id), PRIMARY KEY(annee_id, ligne_budget_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_budget_annee (ligne_budget_id INT NOT NULL, annee_id INT NOT NULL, INDEX IDX_D5D10F6F94EA930 (ligne_budget_id), INDEX IDX_D5D10F6543EC5F0 (annee_id), PRIMARY KEY(ligne_budget_id, annee_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annee_ligne_budget ADD CONSTRAINT FK_3D403072543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annee_ligne_budget ADD CONSTRAINT FK_3D403072F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_annee ADD CONSTRAINT FK_D5D10F6543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_annee ADD CONSTRAINT FK_D5D10F6F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE annee_lign_budget');
    }
}
