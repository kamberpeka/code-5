<?php


namespace App\Http\Controllers;


use App\Http\Requests\MessageStoreRequest;
use App\Services\MessageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('message.create');
    }

    /**
     * @param  MessageStoreRequest  $request
     * @return RedirectResponse
     */
    public function store(MessageStoreRequest $request)
    {
        $response = MessageService::store($request->validated());

        if ($response->success()) {
            return redirect()->route('message.success');
        } else {
            return redirect()->route('message.failed');
        }
    }
}