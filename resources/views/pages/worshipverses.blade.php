@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
    	    Pages
        </li>
        <li class="breadcrumb-item  active">
        	<a href="{{url('worshipverses')}}">Worship Verses</a>
        </li>
    </ol>
    <div class="card mb-3">
    	<div class="card-header">
    		<i class="fas fa-table"></i>
    		Full Worship Verses
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    				<thead>
    					<tr>
    						<th>
    							CHAPTER NAME
    						</th>
                            <th>
                                CHAPTER NUMBER
                            </th>
                            <th>
                                VERSE RANGE
                            </th>
                            <th>
                                SHORT NOTES
                            </th>
                            <th>
                                LONG NOTES
                            </th>
                            <th>
                                WORSHIP TIME
                            </th>
    					</tr>
    				</thead>
    				<tfoot>

    				</tfoot>
    				<tbody>
                        @foreach($worshipverses as $wverses)
                            <tr>
                                <td>
                                {{ $wverses->chap_name }}
                                </td>
                                <td>
                                    {{ $wverses->chap_number }}
                                </td>
                                <td>
                                    {{ $wverses->verse_range }}
                                </td>
                                <td>
                                    {{ $wverses->short_note }}
                                </td>
                                <td>
                                    {{ $wverses->long_note }}
                                </td>
                                <td>
                                    {{ $wverses->winfotime }}
                                </td>
                            </tr>
                        @endforeach
    				</tbody>
    			</table>
    		</div>
    	</div>
    	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
@stop