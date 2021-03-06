<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adv;
use Illuminate\Support\Facades\Storage;
use Toastr;

class AdsController extends Controller
{
    public function listAds()
    {
        $ads = Adv::All();
        return view('admin.ads.list-ads', compact('ads'));
    }
    public function getAddAds()
    {
        return view('admin.ads.add-ads');
    }
    public function postAddAds(Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required',
            'link' => 'required',
            'image1' => 'required|file:1,10000',
            'image2' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'link.required' => 'Link is required',
            'image1.required' => 'Image 728 x 90 is required',
            'image2.required' => 'Image 368 x 300 is required',
        ]
    );
        $ads = new Adv;
        $ads ->name = $rq->input('name');
        $ads ->link = $rq->input('link');
        if($rq->hasFile('image1'))
        {
            $file = $rq->file('image1');
            $filename = $file->getClientOriginalName('image1');
            $images = time()."_".$filename;
            $destinationPath = base_path('/page/images/image1');
            $file->move($destinationPath, $images);
            $ads['image1'] = $images;
        }
        if($rq->hasFile('image2'))
        {
            $file2 = $rq->file('image2');
            $filename2 = $file2->getClientOriginalName('image2');
            $images2 = time()."_".$filename2;
            $destinationPath2 = base_path('/page/images/image2');
            $file2->move($destinationPath2, $images2);
            $ads['image2'] = $images2;
        }

        $ads->save();
        Toastr::success('Add successful Ads', $title = null, $options = []);
        return redirect()->route('list-ads');
    }
    public function getEditAds($id)
    {
        $ads = Adv::find($id);
        return view('admin.ads.edit-ads', compact('ads'));
    }
    public function postEditAds($id, Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required',
            'link' => 'required',

        ],
        [
            'name.required' => 'Name is required',
            'link.required' => 'Link is required',
        ]
    );

        $ads = Adv::find($id);
        $ads ->name = $rq->input('name');
        $ads ->link = $rq->input('link');
        if($rq->hasFile('image1'))
        {
            $file = $rq->file('image1');
            $filename = $file->getClientOriginalName('image1');
            $images = time()."_".$filename;
            $destinationPath = base_path('/page/images/image1');
            $file->move($destinationPath, $images);
            $oldfile = $ads->image1;
            Storage::delete($oldfile);
            $ads['image1'] = $images;
        }

        if($rq->hasFile('image2'))
        {
            $file2 = $rq->file('image2');
            $filename2 = $file2->getClientOriginalName('image2');
            $images2 = time()."_".$filename2;
            $destinationPath2 = base_path('/page/images/image2');
            $file2->move($destinationPath2, $images2);
            $oldfile2 = $ads->image2;
            Storage::delete($oldfile2);
            $ads['image2'] = $images2;
        }

        $ads->update();
        Toastr::success('Edit successful Ads', $title = null, $options = []);
        return redirect()->route('list-ads');
    }
    public function deleteAds($id)
    {
        $del= Adv::find($id);
        $del->delete();
        return redirect()->route('list-ads');
    }
}
