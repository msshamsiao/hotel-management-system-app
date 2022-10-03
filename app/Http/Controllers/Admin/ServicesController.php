<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyServiceRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Service;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $collection = Service::get();

            $datatable = DataTables::of($collection)
            ->addIndexColumn()
            ->editColumn('actions', function ($row) {
                $editGate      = 'room_edit';
                $deleteGate    = 'room_delete';
                $crudRoutePart = 'rooms';

                return view('partials.datatablesActions', compact(
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            })
            ->addColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            })
            ->addColumn('room_photo', function ($row) {
                return '<img src="../public/Image/'.$row->room_photo.'" style="width: 100px; height: 100px; object-fit: cover;">';
            })
            ->addColumn('room_name', function ($row) {
                return $row->name ? $row->name : "";
            })
            ->addColumn('price', function ($row) {
                return $row->price ? $row->price : "";
            })
            ->addColumn('capacity', function ($row) {
                return $row->capacity ? $row->capacity : "";
            })
            ->addColumn('room_status', function ($row) {
                $status = '';

                if($row->room_status == 'Available'){
                    $status = '<span class="badge badge-success">' . $row->room_status . '</span>';
                }else{
                    $status = '<span class="badge badge-danger">' . $row->room_status . '</span>';   
                }

                return $status;
            });

            return $datatable->rawColumns(['room_photo', 'room_name', 'price', 'capacity', 'room_status'])
            ->make(true);
        }

        return view('admin.rooms.index');
    }

    public function available_rooms(Request $request)
    {
        if ($request->ajax()) {

            $collection = Service::where('room_status', 'Available')->get();

            $datatable = DataTables::of($collection)
            ->addIndexColumn()
        
            ->addColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            })
            ->addColumn('room_photo', function ($row) {
                return '<img src="../public/Image/'.$row->room_photo.'" style="width: 100px; height: 100px; object-fit: cover;">';
            })
            ->addColumn('room_name', function ($row) {
                return $row->name ? $row->name : "";
            })
            ->addColumn('price', function ($row) {
                return $row->price ? $row->price : "";
            })
            ->addColumn('capacity', function ($row) {
                return $row->capacity ? $row->capacity : "";
            })
            ->addColumn('room_status', function ($row) {
                $status = '';

                if($row->room_status == 'Available'){
                    $status = '<span class="badge badge-success">' . $row->room_status . '</span>';
                }else{
                    $status = '<span class="badge badge-danger">' . $row->room_status . '</span>';   
                }

                return $status;
            });

            return $datatable->rawColumns(['room_photo', 'room_name', 'price', 'capacity', 'room_status'])
            ->make(true);
        }

        return view('admin.rooms.show');
    }

    public function create()
    {
        abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rooms.create');
    }

    public function store(StoreServiceRequest $request)
    {
        $room = new Service();
        if($request->file('file_photo')){
            $file = $request->file('file_photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            #Storage::disk('public')->put('image/', $file);
            $file->move(public_path('public/Image'), $filename);
            $room['room_photo'] = $filename;
        }

        $room->name = $request->name;
        $room->capacity = $request->capacity;
        $room->price = $request->price_per_day;
        $room->save();

        return redirect()->route('admin.rooms.index');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $room = Service::find($id);
        return view('admin.rooms.edit', compact('room'));
    }

    public function update(UpdateServiceRequest $request, $id)
    {
        $room = Service::find($id);
        $room->name = $request->name;
        $room->capacity = $request->capacity;
        $room->price = $request->price_per_day;
        $room->update();

        return redirect()->route('admin.rooms.index');
    }

    public function show(Service $service)
    {
        abort_if(Gate::denies('room_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rooms.show', compact('service'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('room_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Service::findOrFail($id)->delete();

        return redirect()->route('admin.rooms.index');
    }
}
