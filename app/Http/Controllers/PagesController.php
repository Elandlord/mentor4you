<?php

namespace App\Http\Controllers;

use App\News;
use App\Page;
use App\Mentor;
use App\Section;
use App\Partner;
use App\Http\Requests;
use App\TeamMember;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    private function getSliders()
    {
        // return Section::where('page_id', Page::where('name', 'Slider')->first()->id)->get();
    }


	public function indexHome()
	{
        $data = [
            'sliders' => $this->getSliders(),
        ];

        $laatsteNieuwsbericht = News::take(1)->get();
        $partners = Partner::take(4)->get();
        $sections = Section::byPageName('homepage');
        $section = new Section;
		return view('pages.homepage', compact(
            'data',
            'section',
            'sections',
            'partners',
            'laatsteNieuwsbericht'
        ));
	}

    public function werkgebied(){
        $data = [
            'werkgebied' => Section::where('id', 10)->first(),
        ];

        return view('pages.werkgebied', compact('data'));
    }

    public function team(){

        $data = [
            'team' => Section::where('id', 12)->first(),
            'teammembers' => TeamMember::all(),
        ];

        return view('pages.team', compact('data'));
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
            'municipalities' => $municipalities,
            'title' => Section::where('id', 32)->first(),
        ];
		return view('pages.jongeren-aanmelden', compact('data'));
	}

	public function contact()
	{
        $data = [
            'titel' => Section::where('id', 22)->first(),
            'bold' => Section::where('id', 23)->first(),
            'vestiging' => Section::where('id', 24)->first(),
            'sliders' => $this->getSliders(),
        ];

		return view('pages.contact', compact('data'));
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

		return view('pages.mentor-aanmelden', compact('data'));

	}

	public function resultaten()
	{
        $data = [
            'titel' => Section::where('id', 15)->first(),
            'sliders' => $this->getSliders(),
        ];
		return view('pages.resultaten', compact('data'));
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
            'sliders' => $this->getSliders(),
        ];
        $sections = Section::byPageName('over-ons');
        $section = new Section;
		return view('pages.over-ons', compact(
            'data',
            'sections',
            'section'
        ));
	}

    public function ervaringen()
    {
        $mentoren = Mentor::with('photos')->get();

        return view('pages.resultaten', compact('mentoren'));
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


		return view('pages.steun-ons', compact('data'));
	}

	public function actueel()
	{
        $data = [
            'titel' => Section::where('id', 14)->first(),
            'nieuwsberichten' => News::orderBy('id', 'desc')->paginate(2),
            'sliders' => $this->getSliders(),
        ];
		return view('pages.actueel', compact('data'));
	}


    public function doorklikActueel($title, $id){
        $data = [
             'news' => News::find($id),
            'sliders' => $this->getSliders(),
            'aanmeldbox' => Section::where('id', 13)->first(),
        ];

        return view('pages.news.doorklik', compact('data'));
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