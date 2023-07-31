<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230728205422 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trek ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trek ADD description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trek ADD length VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trek ADD duration VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trek ADD difficulty VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trek ADD max_elevation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trek ADD image_path VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_508673DB989D9B62 ON trek (slug)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX UNIQ_508673DB989D9B62');
        $this->addSql('ALTER TABLE trek DROP slug');
        $this->addSql('ALTER TABLE trek DROP description');
        $this->addSql('ALTER TABLE trek DROP length');
        $this->addSql('ALTER TABLE trek DROP duration');
        $this->addSql('ALTER TABLE trek DROP difficulty');
        $this->addSql('ALTER TABLE trek DROP max_elevation');
        $this->addSql('ALTER TABLE trek DROP image_path');
    }
}
