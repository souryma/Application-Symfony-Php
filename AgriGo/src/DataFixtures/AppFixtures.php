<?php

namespace App\DataFixtures;

use App\Entity\Producteur;
use App\Entity\Produit;
use App\Entity\Variete;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Jacky = new Producteur();
        $Jacky->setNomProducteur('Jacky');
        $Jacky->setImageProducteur('img/Jacky.jpg');
        $Jacky->setPrenomProducteur('Lpere');
        $Jacky->setNumRue('5');
        $Jacky->setNomRue('Rue de chez Jacky');
        $Jacky->setVilleProducteur('La rochelle');
        $Jacky->setCodePostal('17000');
        $Jacky->setMailProducteur('JAcky@exemple.net');
        $Jacky->setNomMagasin('Chez Jacky');
        $Jacky->setNumTelProducteur('0102030405');
        $manager->persist($Jacky);

        $michel = new Producteur();
        $michel->setNomProducteur('Paulnaraif');
        $michel->setImageProducteur('img/Paulnaraif.jpg');
        $michel->setPrenomProducteur('Michel');
        $michel->setNumRue('5');
        $michel->setNomRue('Rue de chez Michel');
        $michel->setVilleProducteur('La rochelle');
        $michel->setCodePostal('17000');
        $michel->setMailProducteur('JAcky@exemple.net');
        $michel->setNomMagasin('Chez Michel');
        $michel->setNumTelProducteur('0102030405');
        $manager->persist($michel);

        $Matt = new Producteur();
        $Matt->setNomProducteur('Paukeaurra');
        $Matt->setImageProducteur('img/Paukeaurra.jpg');
        $Matt->setPrenomProducteur('Matt');
        $Matt->setNumRue('5');
        $Matt->setNomRue('Rue de chez Matt');
        $Matt->setVilleProducteur('La rochelle');
        $Matt->setCodePostal('17000');
        $Matt->setMailProducteur('JAcky@exemple.net');
        $Matt->setNomMagasin('Chez Matt');
        $Matt->setNumTelProducteur('0102030405');
        $manager->persist($Matt);

        $cerise = new Produit();
        $cerise->setTypeProduit('Cerise');
        $cerise->setCategorieProduit('fruit');
        $cerise->setImageProduit('img/cerise.png');
        $cerise->setDescriptionProduit('La cerise est le fruit comestible du cerisier. Il s\'agit d\'une drupe (fruit charnu à noyau), de forme sphérique, de couleur
 généralement rouge plus ou moins foncé jusque noire, plus rarement jaune. Ce petit fruit compte environ 50 calories pour 100 grammes.
 La fleur est généralement blanche. ');
        $manager->persist($cerise);

        $fraise = new Produit();
        $fraise->setTypeProduit('Fraise');
        $fraise->setCategorieProduit('fruit');
        $fraise->setImageProduit('img/fraise.png');
        $fraise->setDescriptionProduit('La fraise est un fruit rouge issu des fraisiers, espèces de plantes herbacées appartenant au genre Fragaria (famille des Rosacées), dont plusieurs variétés sont cultivées. ');
        $manager->persist($fraise);

        $pomme = new Produit();
        $pomme->setTypeProduit('Pomme');
        $pomme->setCategorieProduit('fruit');
        $pomme->setImageProduit('img/pomme.png');
        $pomme->setDescriptionProduit('pomme.txt');
        $manager->persist($pomme);

        $peche = new Produit();
        $peche->setTypeProduit('Peche');
        $peche->setCategorieProduit('fruit');
        $peche->setImageProduit('img/peche.png');
        $peche->setDescriptionProduit('description.txt');
        $manager->persist($peche);

        $framboise = new Produit();
        $framboise->setTypeProduit('Framboise');
        $framboise->setCategorieProduit('fruit');
        $framboise->setImageProduit('img/framboise.png');
        $framboise->setDescriptionProduit('description.txt');
        $manager->persist($framboise);

        $carotte = new Produit();
        $carotte->setTypeProduit('Carotte');
        $carotte->setCategorieProduit('legume');
        $carotte->setImageProduit('img/carotte.png');
        $carotte->setDescriptionProduit('La carotte est une plante bisannuelle de la famille des apiacées (aussi appelées ombellifères),
 largement cultivée pour sa racine pivotante charnue, comestible, de couleur généralement orangée, consommée comme légume.
 La carotte représente après la pomme de terre le principal légume-racine cultivé dans le monde.');
        $manager->persist($carotte);

        $rouge = new Variete();
        $rouge->setImageVariete('img/ceriseRouge.png');
        $rouge->setNomVariete('Cerise rouge');
        $rouge->setTypeVariete($cerise);
        $rouge->setProducteurVariete($Jacky);
        $manager->persist($rouge);

        $vert = new Variete();
        $vert->setImageVariete('img/ceriseVerte.png');
        $vert->setNomVariete('Cerise vert');
        $vert->setTypeVariete($cerise);
        $vert->setProducteurVariete($Jacky);
        $manager->persist($vert);

        $jaune = new Variete();
        $jaune->setImageVariete('img/ceriseJaune.png');
        $jaune->setNomVariete('Cerise jaune');
        $jaune->setTypeVariete($cerise);
        $jaune->setProducteurVariete($Jacky);
        $manager->persist($jaune);

        $oeuf = new Produit();
        $oeuf->setTypeProduit('Oeuf');
        $oeuf->setCategorieProduit('autre');
        $oeuf->setImageProduit('img/oeufProduit.png');
        $oeuf->setDescriptionProduit('Lœuf est un produit agricole issu délevages divers et utilisé comme aliment humain simple ou servant dingrédient dans la composition de nombreux plats dans la plupart des cultures du monde. ');
        $manager->persist($oeuf);

        $oeufPoule = new Variete();
        $oeufPoule->setImageVariete('img/oeufPoule.png');
        $oeufPoule->setNomVariete('Oeuf de Poule');
        $oeufPoule->setTypeVariete($oeuf);
        $oeufPoule->setProducteurVariete($Jacky);
        $manager->persist($oeufPoule);

        $oeufAutruche = new Variete();
        $oeufAutruche->setImageVariete('img/oeufAutruche.png');
        $oeufAutruche->setNomVariete('Oeuf d autruche');
        $oeufAutruche->setTypeVariete($oeuf);
        $oeufAutruche->setProducteurVariete($Jacky);
        $manager->persist($oeufAutruche);


        $aubergine = new Produit();
        $aubergine->setTypeProduit('Aubergine');
        $aubergine->setCategorieProduit('legume');
        $aubergine->setImageProduit('img/aubergine.png');
        $aubergine->setDescriptionProduit('L\’aubergine est une espèce de plantes dicotylédones de la famille des Solanaceae, originaire d\'Asie.
    Ce sont des plantes herbacées annuelles, largement cultivées pour leurs fruits comestibles comme plantes potagères ou maraîchères.
    L\'espèce a été domestiquée en Asie depuis l\'époque préhistorique. Le terme désigne également le fruit. ');
        $manager->persist($aubergine);

        $pommeDeTerre = new Produit();
        $pommeDeTerre->setTypeProduit('Pomme de terre');
        $pommeDeTerre->setCategorieProduit('feculent');
        $pommeDeTerre->setImageProduit('img/patate.png');
        $pommeDeTerre->setDescriptionProduit('La pomme de terre ou patate (langage familier, canadianisme et belgicisme), est un tubercule comestible produit par l’espèce Solanum tuberosum,
 appartenant à la famille des solanacées. Le terme désigne également la plante elle-même, plante herbacée, vivace par ses tubercules
 mais toujours cultivée comme une culture annuelle.');
        $manager->persist($pommeDeTerre);

        $ble = new Produit();
        $ble->setTypeProduit('Blé');
        $ble->setCategorieProduit('feculent');
        $ble->setImageProduit('img/ble.png');
        $ble->setDescriptionProduit('description.txt');
        $manager->persist($ble);

        $Tomate = new Produit();
        $Tomate->setTypeProduit('Tomate');
        $Tomate->setCategorieProduit('legume');
        $Tomate->setImageProduit('img/tomate.png');
        $Tomate->setDescriptionProduit('La tomate est une espèce de plantes herbacées du genre Solanum de la famille des Solanacées, originaire
 du Nord-Ouest de l\'Amérique du Sud, largement cultivée pour son fruit. Le terme désigne aussi ce fruit charnu. La tomate se consomme
 comme un légume-fruit, crue ou cuite. Elle est devenue un élément incontournable de la gastronomie dans de nombreux pays, et tout
 particulièrement dans le bassin méditerranéen. ');
        $manager->persist($Tomate);

        $Haricot = new Produit();
        $Haricot->setTypeProduit('Haricot Vert');
        $Haricot->setCategorieProduit('legume');
        $Haricot->setImageProduit('img/haricot.png');
        $Haricot->setDescriptionProduit('description.txt');
        $manager->persist($Haricot);

        $Courgette = new Produit();
        $Courgette->setTypeProduit('Courgette');
        $Courgette->setCategorieProduit('legume');
        $Courgette->setImageProduit('img/courgette.png');
        $Courgette->setDescriptionProduit('description.txt');
        $manager->persist($Courgette);

        $Poivron = new Produit();
        $Poivron->setTypeProduit('Poivron');
        $Poivron->setCategorieProduit('legume');
        $Poivron->setImageProduit('img/poivron.png');
        $Poivron->setDescriptionProduit('description.txt');
        $manager->persist($Poivron);

        $Poireaux = new Produit();
        $Poireaux->setTypeProduit('Poireaux');
        $Poireaux->setCategorieProduit('legume');
        $Poireaux->setImageProduit('img/poireaux.png');
        $Poireaux->setDescriptionProduit('description.txt');
        $manager->persist($Poireaux);

        $Salade = new Produit();
        $Salade->setTypeProduit('Salade');
        $Salade->setCategorieProduit('legume');
        $Salade->setImageProduit('img/salade.png');
        $Salade->setDescriptionProduit('description.txt');
        $manager->persist($Salade);


        $manager->flush();
    }
}
