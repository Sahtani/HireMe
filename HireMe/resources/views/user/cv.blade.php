
<!DOCTYPE html >
<html>
<head>

	<title>Jonathan Doe | Web Designer, Director | name@yourdomain.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/resume.css') }}">

</head>
<body>

<div id="doc2" class="yui-t7">
    <button onclick="window.print()">Dwnload cv</button>
	<div id="inner">
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>{{ $user->name }}</h1>
					<h2>{{ $jobseeker->title }}, {{ $jobseeker->post }}</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3></h3>
						<h3>{{ $user->email }}</h3>
						<h3>{{ $jobseeker->phone }}</h3>
					</div>
				</div>
			</div>
		</div>

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								{{ $jobseeker->about }} .
							</p>
						</div>
					</div>
					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
                        <div class="yui-u">
                            @foreach ($skills as $skill)
                                <div class="talent">
                                    <h2>{{ $skill->name }}</h2>
                                </div>
                            @endforeach
                        </div>
					</div><!--// .yui-gf -->
                    <div class="yui-gf">
						<div class="yui-u first">
							<h2>Languages</h2>
						</div>
                        <div class="yui-u">
                            @foreach ($langues as $langue)
                                <div class="talent">
                                    <h2>{{ $langue->name }}</h2>
                                    <p>{{ $langue->level }}</p>
                                </div>
                            @endforeach
                        </div>
					</div>
  
					</div><!--// .yui-gf-->

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Experience</h2>
                        </div><!--// .yui-u -->
                    
                        <div class="yui-u">
                            @foreach ($exs as $ex)
                                <div class="job">
                                    <h2>{{ $ex->company }}</h2>
                                    <h3>{{ $ex->title }}</h3>
                                    <h4>{{ \Carbon\Carbon::parse($ex->start_date)->format('Y') }} - {{ \Carbon\Carbon::parse($ex->end_date)->format('Y') }}</h4>
                                    <p>{{ $ex->desc }}</p>
                                </div>
                            @endforeach
                        </div><!--// .yui-u -->
                    </div>
                    <!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
                            @foreach ($cursus as $cur)
							<h2> {{ $cur->etablissement }} - {{ $cur->diplome }}</h2>
                            <span >{{ \Carbon\Carbon::parse($ex->start_date)->format('Y') }}
                            -
                            {{ \Carbon\Carbon::parse($ex->end_date)->format('Y') }}</span>
                            @endforeach 
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>{{ $user->name }} &mdash;{{ $user->email }} &mdash; {{ $jobseeker->phone }}</p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>


