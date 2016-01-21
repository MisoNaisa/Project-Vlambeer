@extends('layout.master_admin')

@section('section')
    <div class="container">
        @if($errors->has())
            <ul class="list-group">

                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
        @if (session('message'))

            <ul class="list-group">
                <li class="list-group-item list-group-item-success">
                    {{ session('message') }}
                </li>
            </ul>
        @endif
        <table class="table">
            <tr>
                <td>
                    <form action="{{ action('MailsController@store') }}" method="post">
                        {{ csrf_field() }}
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        <input type="submit" value="Add">
                    </form>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Email</td>
                <td></td>
            </tr>
            @foreach($mailList as $one)
                <tr>
                    <td>{{ $one['email'] }}</td>
                    <td>
                        <form action="{{ action('MailsController@destroy', $one['id']) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </table>
    </div>
@endsection
