@extends('layouts.default')
@section('content')

<div class="container-fluid">
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
    	    Pages
        </li>
        <li class="breadcrumb-item  active">
        	<a href="{{url('worshipinfo')}}">Worship Info</a>
        </li>
    </ol>
    <div class="card mb-3">
    	<div class="card-header">
    		<i class="fas fa-table"></i>
    		Full Worship Info
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
    				<tfoot>

    				</tfoot>
    				<tbody>
                        @foreach($worshipinfo as $winfos)
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
    	<div class="card-footer small text-muted">Now</div>
    </div>
</div>
@stop