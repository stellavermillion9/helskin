
@extends('dashboard.main')
     
@section('container')
</br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>HelSkin Product</h2>
            </div>
            
        </div>
    </div>
</br>

<div class="pull-right">
            <a class="btn btn-success" href="{{ route('iklan.create')}}"> Create New Logo</a>
</div>

</br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($iklan as $iklans)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{asset ('image/iklan/'.$iklans->image )}}" width="100px"></td>
            <td><p>{{ $iklans->description }}</p></td>
            <td>
                <form action="{{ route('iklan.destroy',$iklans->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('iklan.edit',$iklans->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection 