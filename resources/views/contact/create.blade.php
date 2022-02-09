@extends ('layouts.base')

@section('title', 'Contact Us')

@section('content')

    <div id="contact-div">

        <form id="contact-form" action="/contact" method="POST">

            @if(session('status'))
                <div class="contact-succ">
                    {{ session('status') }}
                </div>
             @endif

            <div>
                <h1 >Contact Us</h1>
                <p id="contact-p">(Please fill this form in a decent manner.)</p>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                <div class="contact-error">{{ $errors->first('name') }}</div>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                <div class="contact-error">{{ $errors->first('email') }}</div>
            </div>
    
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
                <div class="contact-error">{{ $errors->first('message') }}</div>
            </div>
    
            @csrf
            <button type="submit" class="btn btn-warning">Send Message</button>
            <br>
        </form>
    </div>   

@endsection