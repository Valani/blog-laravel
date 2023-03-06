<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag): string
    {
        $data = $request->validated();
        $tag->update($data);

        return redirect()->route('admin.tag.show', compact('tag'));
    }
}
