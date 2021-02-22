<?php

require __DIR__.'/vendor/autoload.php';

use Denpa\Bitcoin\Client as BitcoinClient;

$bitcoind = new BitcoinClient([
    'scheme'        => 'http',                 // optional, default http
    'host'          => '',            // optional, default localhost
    'port'          => 8332,                   // optional, default 8332
    'user'          => '',              // required
    'password'      => '',          // required
    // 'ca'            => '/etc/ssl/ca-cert.pem',  // optional, for use with https scheme
    // 'preserve_case' => false,                  // optional, send method names as defined instead of lowercasing them
]);

//  Bitcoin Core API JSON-RPC docs
//  https://bitcoincore.org/en/doc/0.21.0/rpc/

//--------------- Main Wallet ------------------------

// echo $bitcoind->listWallets();

// echo $bitcoind->getBalance(); //  Retorna el balance de la wallet completa

// echo $bitcoind->listLabels();

// echo $bitcoind->getWalletInfo();

// echo $bitcoind->createWallet("main_wallet");

// echo $bitcoind->listWallets();

// echo $bitcoind->backupWallet("backup.dat"); // Safely copies current wallet file to destination

// echo $bitcoind->loadWallet("main_wallet");
// echo $bitcoind->loadWallet("backup.dat");


//--------------- Individual Accounts ---------------

$address = "";  // label=username
$address2 = "";  // label=username23
$addressExt = "";
//                                   label
// echo $bitcoind->getNewAddress("username", "p2sh-segwit");  
// retorna una nueva direccion para recibir, 
// con el formato que comienza con 3 (en la mainnet) - 2MyAcJkrjEK34MRndMWMeyYYnv5Xphwdggf (testnet)


// echo $bitcoind->getAddressInfo($address);


// echo $bitcoind->listTransactions("username");  
// retorna todas las transacciones por label, incluyendo las que tienen 0 confirmaciones


// echo $bitcoind->listReceivedByAddress(1, false, false, $address);  
// retorna el total recibido por la direccion que se le pase incluyendo
// un arreglo con los ids de las transacciones, con al menos una confirmacion 


// echo $bitcoind->getReceivedByAddress($address);  
// retorna el monto recibido total


//------------------ Transacciones -------------

// https://bitcoincore.org/en/doc/0.21.0/rpc/wallet/sendtoaddress/

// sendtoaddress "address" amount ( "comment" "comment_to" subtractfeefromamount replaceable conf_target "estimate_mode" avoid_reuse fee_rate verbose )


//                                                                                              sat/vB
// echo $bitcoind->sendToAddress($addressExt, "0.001", "", "", false, null, null, "unset", null, 134);

// right now median transaction size of 224 bytes
// 30000 (satoshis) / 224 (bytes) = 134 sat/vB
// 10000 (satoshis) / 224 (bytes) = 45 sat/vB

// echo $bitcoind->sendToAddress($addressExt, "0.001", "", "", false, null, null, "unset", null, 134);


// $txid = "5203f9a5740b1f2f7fb9616eedc289a873528bc6fdf43c5c56653d570298700c";

// echo number_format($bitcoind->getTransaction($txid)['fee'], 8);
// retorna el fee de la transaccion que se le pase
