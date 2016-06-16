<?php namespace App\Http\Controllers;

use \App\Card;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    public function index()
    {
    	$cards = Card::all();
    	return view('cards.index',compact('cards'));
    }

    public function randomCard()
    {
    	$card = Card::all()->random(1);
    
    	return view('welcome',compact('card','user'));
    }
}