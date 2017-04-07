@extends('welcome')

@section('title','Send Message | Antwickler')

@section('content')

    <center>
      <table width="380" border="0" align="center">
        <tbody>
          <tr>
            <td>
            
                <form method="post" action="/contact">
                    <b><legend>Contact Form: 5735512083</legend>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control">
                        <label for="email">Your E-mail</label>
                        <input type="email" name="email" class="form-control">
                        <label for="subject">Your Subject</label>
                        <input type="text" name="subject" class="form-control">
                        <label for="message">Your Message</label>
                        <textarea name="message" class="form-control" rows="8">            
                        </textarea>
                    </div></b>
                    
                    {{csrf_field()}}    
                    <button type="submit" class="btn btn-primary"><b>SEND</b></button>
                </form>

            </td>
          </tr>
        </tbody>
      </table>
    </center>

@endsection