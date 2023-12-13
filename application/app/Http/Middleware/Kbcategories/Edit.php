<?php

/** --------------------------------------------------------------------------------
 * This middleware class handles [edit] precheck processes for categories
 *
 * @package    Grow CRM
 * @author     NextLoop
 *----------------------------------------------------------------------------------*/

namespace App\Http\Middleware\Kbcategories;
use Closure;
use Log;

class Edit {

    /**
     * This middleware does the following
     *   1. validates that the foo exists
     *   2. checks users permissions to [edit] the foo
     *   3. modifies the request object as needed
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        //validate module status
        if (!config('visibility.modules.knowledgebase')) {
            abort(404, __('lang.the_requested_service_not_found'));
            return $next($request);
        }
        
        //category id
        $category_id = $request->route('knowledgebase');

        //does the foo exist
        if (!$category = \App\Models\Category::Where('category_id', $category_id)->Where('category_type', 'knowledgebase')->first()) {
            Log::error("knowledgebase category could not be found", ['process' => '[permissions][kb-categories][edit]', 'ref' => config('app.debug_ref'), 'function' => __function__, 'file' => basename(__FILE__), 'line' => __line__, 'path' => __file__, 'cattegory id' => $category_id ?? '']);
            abort(409, __('lang.category_not_found'));
        }

        //permission: does user have permission to edit this foo
        if (auth()->user()->role->role_manage_knowledgebase_categories == 'yes') {
            
            return $next($request);
        }

        //permission denied
        Log::error("permission denied", ['process' => '[permissions][kb-categories][edit]', 'ref' => config('app.debug_ref'), 'function' => __function__, 'file' => basename(__FILE__), 'line' => __line__, 'path' => __file__, 'category id' => $category_id]);
        abort(403);
    }
}
