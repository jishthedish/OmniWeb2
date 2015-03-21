<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use View;
use App\Fileentry;
use App\Contactslist;
use Request;
use Flash;
use Session;
use Input;
use Form;
use Validator;
use Excel;
//use Reader;
use League\Csv;
use League\Csv\Reader;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class OmniController extends Controller {


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function campaigns()
	{
		//Not required any more 
		//$entries = Fileentry::all();

		return view::make('omniWeb.campaigns'); //, compact('entries'));
	}

	public function contacts()
	{
		//Not required any more 
		//$entries = Fileentry::all();

		return view::make('omniWeb.contacts'); //, compact('entries'));
	}

	public function addcampaigns() {

		//add the logic to check for duplicates & errors 

		$input = Input::all();		 

	    $rules = array(
	        'filefield' => 'required',
	        'startDate' => 'required',
	        'endDate' => 'required'
           ,'campaignName' => 'required'
	    );

	    $validation = Validator::make($input, $rules);

	    if ($validation->fails())
	    {
	       Session::flash('error', 'Please Enter all the required fields');
	       Request::flash();
			return redirect('campaigns');
	    }



		$file = Request::file('filefield');
		$filename=$file->getFilename();
		// Log info not required anymore
		//Log::info($filename);
		//Log::info('Read filename.');
		$extension = $file->getClientOriginalExtension();
		//Copy file to local with a new name. Change later to the format required by Vinay
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));

		//Store data in DB
		$entry = new Fileentry();
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
		$entry->campaignname = Request::input('campaignName');
		$entry->campaign_start = Request::input('startDate');
		$entry->campaign_end = Request::input('endDate');
		$entry->save();

	
     

		//Final Message to display on screen
		Session::flash('message', 'Campaign  has been created'); 
		//Session::flash('error', 'Error in your input');

		return redirect('campaigns'); //->with('message', 'Your campaign has been created');
		
	}

	
	public function getCampaigns($filename){
		//Get data from DB and the local filename
		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('local')->get($entry->filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
	}

	public function getAll(){
		$entries = Fileentry::all();

		return view('omniWeb.getCampaigns', compact('entries'));
	}

	public function addcontacts() {

		//add the logic to check for duplicates & errors 

		/*$input = Input::all();		 

	    $rules = array(
	        'filefield' => 'required',
	        'groupname' => 'required' 
	    );

	    $validation = Validator::make($input, $rules);

	    if ($validation->fails())
	    {
	       Session::flash('error', 'Please Enter all the required fields');
	       Request::flash();
			return redirect('contacts');
	    }

*/

		$file = Request::file('filefield');
		$filename=$file->getFilename();
		// Log info not required anymore
		//Log::info($filename);
		//Log::info('Read filename.');
		$extension = $file->getClientOriginalExtension();
		
		//Store data in DB
		$entry = new Contactslist();
		$entry->campaignname = Request::input('groupName');

		 if (Input::hasFile('filefield')) {
            $file = Input::file('filefield');
            Excel::load($file, function($reader) {
            	$reader->setSeparator(',');
            	//$reader->setOffset(1); 
                $reader->each(function($row) {
     		       $entry->mobileNo=$row[0];
     		       $entry->emailId=$row->emailid;
     		       $entry->firstName=$row->firstname;
     		       $entry->lastName=$row->lastname;
     		       $entry->gender=$row->gender;
     		       $entry->groupname=$row->groupname;
     		       $entry->status=$row->status;
     		       $entry->save();
     		    });
       		});		

        }
		

	
     

		//Final Message to display on screen
		Session::flash('message', 'Contacts  has been uploaded'); 
		//Session::flash('error', 'Error in your input');

		return redirect('contacts'); //->with('message', 'Your contacts has been created');
		
	}

	public function postUpload()
	{
		$csv = new Reader(Request::input('filefield'));
		$csv->setOffset(1); //because we don't want to insert the header
		$nbInsert = $csv->each(function ($row) {
		DB::table('contactslist')->insert(
		array(
		'mobileNo' => $row[0],
		'emailId' => $row[1],
		'firstName' => $row[2],
		'lastName' => $row[3],
		'gender' => $row[4],
		)
		);
		});
		//Final Message to display on screen
		Session::flash('message', 'Contacts  has been uploaded'); 
		//Session::flash('error', 'Error in your input');

		return redirect('contacts'); //->with('message', 'Your contacts has been created');
		//});
	}


	public function getContacts(){
		$entries = Contactslist::all();

		return view('omniWeb.getContacts', compact('entries'));
	}

	public function delete(){
		//Delete all the data. To change later to truncate
	  Fileentry::where('id', '>', 0)->delete();
	  Contactslist::where('id', '>', 0)->delete();
	  return 'Cleaned All Tables..!! Lets start fresh';
	}
	
}
