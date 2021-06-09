<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210606002109 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_2DA179771FC6D102 ON user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2DA1797712A5F6CC ON user (email_user)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_2DA1797712A5F6CC ON User');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2DA179771FC6D102 ON User (password_user)');
    }
}
