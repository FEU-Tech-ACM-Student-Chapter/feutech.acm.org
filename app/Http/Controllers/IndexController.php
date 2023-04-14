<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $eventPartners = array(
        'org' => array(
            'copresentor' => array(
            ),
            'major' => array(
                "FEU Tech Association of Civil Engineering Students" => "aces.png",
                "FEU Diliman Junior Marketing Association" => "jma.png",
                "FEU Alabang Tertiary Honor Society" => "honsoc.png",
                "PUP Taguig Computer Society" => "pupcomsoc.png",
            ),
            'minor' => array(
                "Google Developer Student Clubs De La Salle University" => "gdsc_dlsu.png",
            )
        ),
        'sponsors' => array(
            'gold' => array(
                "f(dev)" => array(
                    'img_height' => "128px",
                    'img' => 'fdev.png',
                    'url' => 'https://www.facebook.com/fdev.ph',
                    'link_name' => 'fdev.ph'
                ),
                
                "Indra Philippines" => array(
                    'img_height' => "96px",
                    'img' => 'indra.png',
                    'url' => 'https://www.indracompany.com/',
                    'link_name' => 'indracompany.com'
                ),

                "IBM" => array(
                    'img_height' => "128px",
                    'img' => 'ibm.jpg',
                    'url' => 'https://www.ibm.com/ph-en/',
                    'link_name' => 'ibm.com'
                ),

                "Investree Philippines" => array(
                    'img_height' => "128px",
                    'img' => 'investree.png',
                    'url' => 'https://www.investree.com/',
                    'link_name' => 'investree.ph'
                ),

                "Nezda Technologies, Inc." => array(
                    'img_height' => "128px",
                    'img' => 'nezda.png',
                    'url' => 'https://www.nezdaglobal.com/',
                    'link_name' => 'nezdaglobal.com'
                ),
            ),
            'silver' => array(
            ),
            'bronze' => array(
                "Realtair Inc." => array(
                    'img_height' => "96px",
                    'img' => 'realtair.jpg',
                    'url' => 'https://realtair.com/',
                    'link_name' => 'realtair.com'
                ),

                "ClinkIT Solutions" => array(
                    'img_height' => "96px",
                    'img' => 'clinkit.png',
                    'url' => 'https://www.clinkitsolutions.com/',
                    'link_name' => 'clinkitsolutions.com'
                ),
            ),
            'media' => array(
                "astig.ph" => array(
                    'img_height' => "128px",
                    'img' => 'astigph.png',
                    'url' => 'https://astig.ph/',
                    'link_name' => 'astig.ph'
                ),
                "TechKuya" => array(
                    'img_height' => "96px",
                    'img' => 'techkuya.png',
                    'url' => 'https://www.youtube.com/channel/UCpciKyXU2tFld45LA6vqGbw',
                    'link_name' => 'TechKuya\'s YouTube Channel'
                ),
                "INQUIRER.NET and InqPOP!" => array(
                    'img_height' => "128px",
                    'img' => 'inqpop-inq.png',
                    'url' => 'https://www.inquirer.net/',
                    'link_name' => 'inquirer.net'
                ),
            ),
        )
    );

    public function index() {
        return view('index', [
            'partners' => $this->eventPartners
        ]);
    }
}
