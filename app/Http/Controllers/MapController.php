<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class MapController extends Controller
{
    protected $db;

   public function __construct(Database $database){
    $this->db = $database;
   }

   public function index(){
    $db = $this->db;
    $reference = $db->getReference('lat0');
    $snapshot = $reference
    ->getSnapshot();
    $value = $snapshot->getValue();
    dd($value);
   }
}
