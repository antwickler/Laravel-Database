@extends('welcome')

@section('title','Show Message | Antwickler')

@section('content')

    <h1 align="center"><b>Information from database</b></h1>
    <center>
      <table width="500" border="0" align="center">
        <tbody>
          <tr>
            <td>
            
                @foreach( $contact as  $index => $item )
                  <div align="left">
                    <h3><b> Message {{ ++$index }} from: {{ $item->name }}</b></h3>
                    <p><b>
                        Subject: {{ $item->subject }} <br>
                        E-mail: {{ $item->email }} <br>
                        Message: {{ $item->message }} <br>
                    </b></p>
                  </div>
                  <hr>
                @endforeach

                <h3 align="center"><a href="contact/create"><b>Send Message</b></a></h3>
                <br>

            </td>
          </tr>
        </tbody>
      </table>
    </center>

@endsection