 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     <title>Contact Us</title>
 </head>

 <body>
     <!--Section: Contact v.2-->
     <section class="mb-4">

         <!--Section heading-->
         <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
         <!--Section description-->
         <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
             directly. Our team will come back to you within
             a matter of hours to help you.</p>

         <div class="row">

             <!--Grid column-->
             <div class="col-md-9 mb-md-0 mb-5">
                 <form id="contact-form" name="contact-form" action="{{ route('save-contact') }}" method="POST">
                     @csrf
                     <!--Grid row-->
                     <div class="row">

                         <!--Grid column-->
                         <div class="col-md-6">
                             <div class="md-form mb-0">
                                 <input type="text" id="name" name="name" class="form-control">
                                 <label for="name" class="">Your name</label>
                             </div>
                         </div>
                         <!--Grid column-->

                         <!--Grid column-->
                         <div class="col-md-6">
                             <div class="md-form mb-0">
                                 <input type="text" id="email" name="email" class="form-control">
                                 <label for="email" class="">Your email</label>
                             </div>
                         </div>
                         <!--Grid column-->

                     </div>
                     <!--Grid row-->

                     <!--Grid row-->
                     <div class="row">
                         <div class="col-md-12">
                             <div class="md-form mb-0">
                                 <input type="text" id="subject" name="subject" class="form-control">
                                 <label for="subject" class="">Subject</label>
                             </div>
                         </div>
                     </div>
                     <!--Grid row-->

                     <!--Grid row-->
                     <div class="row">

                         <!--Grid column-->
                         <div class="col-md-12">

                             <div class="md-form">
                                 <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                 <label for="message">Your message</label>
                             </div>

                         </div>
                     </div>
                     <!--Grid row-->

                     <div class="text-center text-md-left">
                         <button type="submit" class="btn btn-primary">Send</button>
                     </div>
                 </form>

                 <div class="status">
                    {{-- {{ dd(session('error')) }} --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-warning">
                            {{ session('error') }}
                        </div>
                    @endif
                 </div>
             </div>
             <!--Grid column-->
         </div>

     </section>
     <!--Section: Contact v.2-->
 </body>

 </html>
