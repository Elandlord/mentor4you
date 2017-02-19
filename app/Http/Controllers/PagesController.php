<?php

namespace App\Http\Controllers;


use App\News;
use App\Page;
use App\Mentor;
use App\Section;
use App\Partner;
use App\TeamMember;
use App\Http\Requests;
use App\Classes\Iterator;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    private function getSliders()
    {
        return Section::where(
            'page_id', Page::where('name', 'slider')->first()->id
        )->get();

    }


	public function indexHome()
	{
        $sliders = $this->getSliders();
        $laatsteNieuwsbericht = News::orderBy('id', 'DESC')->first();
        $partners = Partner::take(4)->get();
        $sections = Section::byPageName('homepage');
        $iterator = new Iterator($sections);

    	return view('pages.homepage', compact(
            'data',
            'partners',
            'laatsteNieuwsbericht',
            'sliders',
            'iterator'
        ));
	}

    public function werkgebied(){
        $sliders = $this->getSliders();
        $sections = Section::byPageName('werkgebied');
        $iterator = new Iterator($sections);

        return view('pages.werkgebied', compact(
            'iterator',
            'sliders'
        ));
    }

    public function team(){
        $teamMembers = TeamMember::all();
        $iterator = new Iterator( Section::byPageName('team') );
        $sliders = $this->getSliders();

        return view('pages.team', compact(
            'teamMembers',
            'iterator',
            'sliders'
        ));
    }

	public function jongerenAanmelden()
	{
        $municipalities = [
            'Noordenveld' => 'Noordenveld',
            'Tynaarlo' => 'Tynaarlo',
            'Assen' => 'Assen',
            'Midden-Drenthe' => 'Midden-Drenthe',
            'Aa en Hunze' => 'Aa en Hunze',
        ];

         $data = [
            'sliders' => $this->getSliders(),
            'aanmeldenJongeren' => Section::where('id', 32)->first(),
            'aanmelden' => Section::where('id', 34)->first(),
            'title' => Section::where('id', 32)->first(),
        ];

        $sliders = $this->getSliders();

		return view('pages.jongeren-aanmelden', compact(
            'data',
            'sliders',
            'municipalities'
        ));
	}

	public function contact()
	{
        $data = [
            'titel' => Section::where('id', 22)->first(),
            'bold' => Section::where('id', 23)->first(),
            'vestiging' => Section::where('id', 24)->first(),
            'sliders' => $this->getSliders(),
        ];
        $iterator = new Iterator(Section::byPageName('contact'));
        $sliders = $this->getSliders();

		return view('pages.contact', compact(
            'data',
            'sliders',
            'iterator'
        ));
	}

	public function mentorenAanmelden()
	{

        $municipalities = ['Noordenveld' => 'Noordenveld', 'Tynaarlo' => 'Tynaarlo', 'Assen' => 'Assen', 'Midden-Drenthe' => 'Midden-Drenthe', 'Aa en Hunze' => 'Aa en Hunze'];

         $data = [
            'aanmeldenMentoren' => Section::where('id', 33)->first(),
            'aanmelden' => Section::where('id', 35)->first(),
            'municipalities' => $municipalities,
            'sliders' => $this->getSliders(),
        ];
        $sliders = $this->getSliders();

		return view('pages.mentor-aanmelden', compact(
            'data',
            'sliders'
        ));

	}

	public function resultaten()
	{
        $data = [
            'titel' => Section::where('id', 15)->first(),
        ];
        $sliders = $this->getSliders();
		return view('pages.resultaten', compact(
            'data',
            'sliders'
        ));
	}

	public function overons()
	{
        $data = [
            'titel' => Section::where('id', 7)->first(),
            'kop1' => Section::where('id', 37)->first(),
            'kop2' => Section::where('id', 9)->first(),
            'kop3' => Section::where('id', 10)->first(),
            'kop4' => Section::where('id', 11)->first(),
            'hetteam' => Section::where('id', 12)->first(),
            'aanmeldbox' => Section::where('id', 13)->first(),
        ];
        $sections = Section::byPageName('over-ons');
        $iterator = new Iterator($sections);
        $sliders = $this->getSliders();

		return view('pages.over-ons', compact(
            'data',
            'iterator',
            'sliders'
        ));
	}

    public function ervaringen()
    {
        $mentoren = Mentor::all();
        $sliders = $this->getSliders();

        return view('pages.ervaringen', compact(
            'mentoren',
            'sliders'
        ));
    }

	public function steunons()
	{
        $data = [
            'titel' => Section::where('id', 16)->first(),
            'eerste_kop' => Section::where('id', 17)->first(),
            'tweede_kop' => Section::where('id', 18)->first(),
            'rekeningnummer' => Section::where('id', 19)->first(),
            'tav' => Section::where('id', 20)->first(),
            'uitleg' => Section::where('id', 21)->first(),
            'sliders' => $this->getSliders(),
        ];

        $iterator = new Iterator(Section::byPageName('steun-ons'));
        $sliders = $this->getSliders();

		return view('pages.steun-ons', compact(
            'data',
            'sliders',
            'iterator'
        ));
	}

	public function actueel()
	{
        $titel = Section::where('id', 14)->first();
        $nieuwsberichten = News::orderBy('id', 'desc')->paginate(2);
        $sliders = $this->getSliders();

		return view('pages.actueel', compact(
            'data',
            'nieuwsberichten',
            'titel',
            'sliders'
        ));
	}


    public function doorklikActueel($title, $id){
        $data = [
            'news' => News::find($id),
            'aanmeldbox' => Section::where('id', 13)->first(),
        ];
        $sliders = $this->getSliders();
        return view('pages.news.doorklik', compact(
            'data',
            'sliders'
        ));
    }

	    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pages' => Page::paginate(20),
        ];

        return view('cms.pages.pages.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $page = Page::create($request->all());

        return redirect('cms/page');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data =[
            'page' => Page::find($id),
        ];

        return view('cms.pages.pages.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id);

        $page->update($request->all());

        return redirect('cms/page');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        return redirect('cms/page');
    }



}