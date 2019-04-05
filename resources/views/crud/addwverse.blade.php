@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
    	    Pages
        </li>
        <li class="breadcrumb-item">
        	Worship Verses
        </li>
        <li class="breadcrumb-item active">
    	    <a href="{{url('addwverse')}}">Add Worship Verses</a>
        </li>
    </ol>
    {{-- <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Get Worship Info
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                WORSHIP TIME
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($worshiptime as $winfos)
                        <tr>
                            <td>
                                {{ $winfos->id }}
                            </td>
                            <td>
                                {{ $winfos->winfotime }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
    <div class="card card-login mx-auto mt-5" style="width:24rem;">
        <div class="card-header">Add Worship Verses</div>
        <div class="card-body">
            <form method="post" action="{{ URL('/addwverse') }}">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="chap_name" name="chap_name" class="form-control" placeholder="Chapter Name" required="required" autofocus="autofocus">
                        <label for="chap_name">Chapter Name</label> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="chap_number" name="chap_number" class="form-control" placeholder="Chapter Number" required="required" autofocus="autofocus">
                        <label for="chap_number">Chapter Number</label> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="verse_range" name="verse_range" class="form-control" placeholder="Verse Range" required="required" autofocus="autofocus">
                        <label for="verse_range">Verse Range</label> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <textarea class="form-control" autofocus="autofocus" id="short_note" name="short_note" rows="1" placeholder="Short Notes" value="Short Notes">
                            
                        </textarea>
                    </div>
                </div>
                <div class="form-group">    
                    <div class="form-label-group">
                        <select class="form-control" name="worshipinfo_id" id="worshipinfo_id">
                            <option selected disabled>Please select a date</option>
                            @if($worshiptime->count())
                                @foreach($worshiptime as $worshipinfo)
                                    <option value="{{$worshipinfo->id}}">
                                        {{$worshipinfo->winfotime}}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-info btn-rounded">
                    Store Data
                </button>
            </form>
        </div>
    </div>
</div>
@stop