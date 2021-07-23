<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreProjectVideoRequest;
use App\Http\Requests\UpdateClientCommentHeaderRequest;
use App\Http\Requests\UpdateFirstStepIconRequest;
use App\Http\Requests\UpdateFirstStepRequest;
use App\Http\Requests\UpdateHwoWeAreDescriptionRequest;
use App\Http\Requests\UpdateHwoWeAreRequest;
use App\Http\Requests\UpdateMainNewRequest;
use App\Http\Requests\UpdateSliderTextRequest;
use App\Http\Requests\UpdateTrainerHeaderRequest;
use App\Model\ClientCommentHeader;
use App\Model\FirstStep;
use App\Model\FirstStepIcon;
use App\Model\HwoAreWe;
use App\Model\HwoWeAreDescription;
use App\Model\MainNew;
use App\Model\ProjectVideo;
use App\Model\SliderText;
use App\Model\TrainerHeader;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;

class AdminController extends Controller
{
    use UploadImage;

    /**
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('admin.index');
    }

    /**
     * @return Response
     */
    public function sliderText(): Response
    {
        return response()->view('admin.slider.header',
            ['sliderText' => SliderText::find(1)]);
    }

    /**
     * @param UpdateSliderTextRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function sliderTextUpdate(UpdateSliderTextRequest $request, $id): RedirectResponse
    {
        $input = $request->all();
        $sliderText = SliderText::find($id);
        $sliderText->update($input);
        return redirect()->route('slider.index');
    }

    public function hwoWeAre()
    {
        $weAre = HwoAreWe::find(1);
        return response()->view('admin.hwoWeAre.index', ['weAre' => $weAre]);
    }

    /**
     * @param UpdateHwoWeAreRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function hwoWeAreUpdate(UpdateHwoWeAreRequest $request, $id): RedirectResponse
    {
        $weAre = HwoAreWe::find($id);
        $input = $request->all();
        $weAre->update($input);
        return redirect()->route('dashboard');
    }

    /**
     * @return Response
     */
    public function firstStep(): Response
    {
        $firstStep = FirstStep::find(1);
        return response()->view('admin.firstStep.index', ['firstStep' => $firstStep]);
    }

    /**
     * @param UpdateFirstStepRequest $request
     * @param $id
     */
    public function firstStepUpdate(UpdateFirstStepRequest $request, $id)
    {
        $firstStep = FirstStep::find($id);
        $input = $request->all();
        $firstStep->update($input);
        return redirect()->route('dashboard');
    }

    /**
     * @return Response
     */
    public function clientCommentHeader(): Response
    {
        return response()->view('admin.clientCommentHeader.index', ['header' => ClientCommentHeader::find(1)]);
    }

    /**
     * @param UpdateClientCommentHeaderRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function clientCommentHeaderUpdate(UpdateClientCommentHeaderRequest $request, $id): RedirectResponse
    {
        $header = ClientCommentHeader::find($id);
        $input = $request->all();
        $header->update($input);
        return redirect()->route('dashboard');
    }

    /**
     * @return Response
     */
    public function trainerHeader(): Response
    {
        return response()->view('admin.trainerHeader.index', ['trainerHeader' => TrainerHeader::find(1)]);
    }

    /**
     * @param UpdateTrainerHeaderRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function trainerHeaderUpdate(UpdateTrainerHeaderRequest $request, $id): RedirectResponse
    {
        $trainerHeader = TrainerHeader::find($id);
        $input = $request->all();
        $trainerHeader->update($input);
        return redirect()->route('dashboard');
    }

    /**
     * @return Response
     */
    public function mainNews(): Response
    {
        return response()->view('admin.mainNews.index',['mainNew'=>MainNew::find(1)]);
    }

    /**
     * @param UpdateMainNewRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function mainNewsUpdate(UpdateMainNewRequest $request,$id): RedirectResponse
    {
        $mainNew = MainNew::find($id);
        $input = $request->all();
        $mainNew->update($input);
        return redirect()->route('dashboard');
    }

    /**
     * @return Response
     */
    public function hwoWeAreDescription(): Response
    {
        return response()->view('admin.WeAreDescription.index',['description'=>HwoWeAreDescription::all()]);
    }

    /**
     * @param UpdateHwoWeAreDescriptionRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function hwoWeAreDescriptionUpdate(UpdateHwoWeAreDescriptionRequest $request,$id): RedirectResponse
    {
        $input = $request->all();
        $image = $request->file('image');
        $description = HwoWeAreDescription::find($id);
        if($image){
            $input['image'] = $this->uploadSliderImage('/images/weAreDescription',$image);
            $this->deleteImage($description->image);
        }
        $description->update($input);
        return redirect()->route('dashboard');

    }

    /**
     * @return Response
     */
    public function firstStepIcon(): Response
    {
        return response()->view('admin.firstStepIcon.index',['descriptions'=>FirstStepIcon::all()]);
    }

    /**
     * @param UpdateFirstStepIconRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function firstStepUpdateIcon(UpdateFirstStepIconRequest $request,$id): RedirectResponse
    {
        $icon = FirstStepIcon::find($id);
        $input = $request->all();
        $icon->update($input);
        return redirect()->route('dashboard');

    }
    public function projectVideo(){
        return response()->view('admin.ProjectVideo.index',['projectVideo' => ProjectVideo::find(1)]);
    }
    public function projectVideoUpdate(StoreProjectVideoRequest $request,$id){
        $projectVideo = ProjectVideo::find($id);
        $input = $request->all();
        $projectVideo->update($input);
        return \redirect()->route('dashboard');
    }
}
