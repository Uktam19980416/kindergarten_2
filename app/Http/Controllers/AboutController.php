<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Repositories\AboutRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\About;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends AppBaseController
{
    /** @var  AboutRepository */
    private $aboutRepository;

    public function __construct(AboutRepository $aboutRepo)
    {
        $this->aboutRepository = $aboutRepo;
    }

    /**
     * Display a listing of the About.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $abouts = $this->aboutRepository->all();

        return view('abouts.index')
            ->with('abouts', $abouts);
    }

    /**
     * Show the form for creating a new About.
     *
     * @return Response
     */
    public function create()
    {
        return view('abouts.create');
    }

    /**
     * Store a newly created About in storage.
     *
     * @param CreateAboutRequest $request
     *
     * @return Response
     */
    public function store(CreateAboutRequest $request)
    {
        // $input = $request->all();

        // $about = $this->aboutRepository->create($input);

        $about = new About();
        if($request->file('images') != null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/about/', $fileName);
            $about->images = $fileName;
        }
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->save();
        Flash::success('Yangiliklar muvaffaqiyatli saqlandi.');

        return redirect(route('abouts.index'));
    }

    /**
     * Display the specified About.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $about = $this->aboutRepository->find($id);

        if (empty($about)) {
            Flash::error('Yangiliklar topilmadi');

            return redirect(route('abouts.index'));
        }

        return view('abouts.show')->with('about', $about);
    }

    /**
     * Show the form for editing the specified About.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $about = $this->aboutRepository->find($id);

        if (empty($about)) {
            Flash::error('Yangiliklar topilmadi');

            return redirect(route('abouts.index'));
        }

        return view('abouts.edit')->with('about', $about);
    }

    /**
     * Update the specified About in storage.
     *
     * @param int $id
     * @param UpdateAboutRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutRequest $request)
    {
        // $about = $this->aboutRepository->find($id);

        $about = About::find($id);
        if($request->file('images') != null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/about/', $fileName);
            $about->images = $fileName;
        }
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->save();
        if (empty($about)) {
            Flash::error('Yangiliklar topilmadi');

            return redirect(route('abouts.index'));
        }

        // $about = $this->aboutRepository->update($request->all(), $id);

        Flash::success('Yangiliklar muvaffaqiyatli yangilandi.');

        return redirect(route('abouts.index'));
    }

    /**
     * Remove the specified About from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $about = $this->aboutRepository->find($id);

        if (empty($about)) {
            Flash::error('Yangiliklar topilmadi');

            return redirect(route('abouts.index'));
        }

        $this->aboutRepository->delete($id);

        Flash::success('Yangiliklar muvaffaqiyatli o\'chirildi.');

        return redirect(route('abouts.index'));
    }
}
