@extends('layout.master')

@section('section')
    <div class="container">

        <table>

            @foreach($users as $user)
            <tr>
                <td>
                    {{ $user->email }}
                </td>
            </tr>
            @endforeach
        </table>

    </div>

@endsection