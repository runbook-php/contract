<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract\Vault;

interface EncryptionContract
{

    public function encrypt(string $plaintext): DataEncryptedContract;

    public function decrypt(DataEncryptedContract $dataEncrypted);


}