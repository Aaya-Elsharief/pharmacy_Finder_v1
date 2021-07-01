

@extends('layouts.app')


@section('content_head')

    <title>Contact</title>
    <link rel="stylesheet" href="/css/Contact.css" media="screen">

@endsection




@section('contents')

    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <h3 class="u-align-left u-custom-font u-font-playfair-display u-text u-text-palette-1-base u-text-1">Contact Us</h3>
        <div class="u-form u-form-1">
            <form action="#" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                <div class="u-form-group u-form-name">
                    <label for="name-3b9a" class="u-form-control-hidden u-label">Name</label>
                    <input type="text" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-border-3 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-form-email u-form-group">
                    <label for="email-3b9a" class="u-form-control-hidden u-label">Email</label>
                    <input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-border-3 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle u-input-2" required="">
                </div>
                <div class="u-form-group u-form-message">
                    <label for="message-3b9a" class="u-form-control-hidden u-label">Message</label>
                    <textarea placeholder="Enter your message" rows="4" cols="50" id="message-3b9a" name="message" class="u-border-3 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle u-input-3" required=""></textarea>
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                    <a href="#" class="u-border-0 u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-30 u-btn-1">Submit</a>
                    <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse">
            </form>
        </div>
    </div>
@endsection
