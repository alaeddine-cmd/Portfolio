@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
    <div class="profile-container">
        <img src="{{ asset('storage/' . $data['image_path']) }}" alt="Profile Photo">
        
        <h1>{{ $data['firstName'] }} {{ $data['lastName'] }}</h1>
        <h3 style="color: #aaa;">{{ $data['role'] }}</h3>

        {{-- social accounts --}}
        <div class="social-links">
            @foreach ($data['socialLinks'] as $platform => $details)
                <a href="{{ $details['url'] }}" target="_blank" title="{{ $platform }}">
                    <i class="{{ $details['icon'] }}"></i>
                </a>
            @endforeach
        </div>

        {{-- about me --}}
        <div id="about" class="about">
            <h2 class="section-title">🙋‍♂️ About Me</h2>
            @foreach ($data['description'] as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

        {{-- skills --}}
        <div class="skills">
            <h2 class="section-title">🛠️ Skills</h2>
            <div class="skills-slider">
                @foreach ($data['skills'] as $skill)
                    <div class="skill-icon">
                        @switch($skill)
                            @case('Laravel')
                                <i class="devicon-laravel-plain colored"></i>
                            @break

                            @case('PHP')
                                <i class="devicon-php-plain colored"></i>
                            @break

                            @case('MySQL')
                                <i class="devicon-mysql-plain colored"></i>
                            @break

                            @case('Node.js')
                                <i class="devicon-nodejs-plain colored"></i>
                            @break

                            @case('MongoDB')
                                <i class="devicon-mongodb-plain colored"></i>
                            @break

                            @default
                                <i class="fas fa-code"></i> <!-- fallback icon -->
                        @endswitch
                        <div class="skill-name">{{ $skill }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Experiences --}}
        <div class="experiences">
            <h2 class="section-title">🧑‍💻 Experiences</h2>
            @foreach ($experiences as $exp)
                <div class="experience-card">
                    <div class="experience-header">
                        <h3>{{ $exp->role }}</h3>
                        <span class="duration">
                            {{ \Carbon\Carbon::parse($exp->start_date)->format('M Y') }}
                            –
                            {{ \Carbon\Carbon::parse($exp->end_date)->format('M Y') }}
                        </span>
                    </div>
                    <p class="company-location">
                        {{ $exp->company }} • {{ $exp->location }}
                    </p>
                    <ul class="tasks">
                        @foreach ($exp->tasks as $task)
                            <li>{{ $task }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        {{-- Educations --}}
        <div class="education-timeline">
            <h2 class="section-title">🎓 Education</h2>
            <div class="timeline">
                @foreach ($educations as $edu)
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="edu-duration">{{ $edu->start_year }} – {{ $edu->end_year ?: 'Present' }}</span>
                            <h3>{{ $edu->degree_name }}</h3>
                            <p class="edu-location">{{ $edu->location }}</p>
                            <p class="edu-specialization">{{ $edu->Specialization }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Projects --}}
        <div id="projects" class="projects-section">
            <h2 class="section-title">🚀 Example Projects</h2>

            <div id="projectCarousel" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($projects as $project)
                            <li class="splide__slide">
                                <div class="project-card">
                                    <h3 class="project-title">{{ $project->title }}</h3>
                                    <div class="video-container">
                                        <iframe width="100%" height="215"
                                            src="https://www.youtube.com/embed/{{ $project->youtube_id }}" frameborder="0"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


        {{-- Certificates --}}
        <div id="certificates" class="certificates-section">
            <h2 class="section-title">📜 Certificates</h2>
            <div class="certificates-grid">
                @foreach ($certificates as $cert)
                    <div class="certificate-card">
                        <div class="certificate-preview">
                            <iframe src="{{ asset('storage/' . $cert->pdf_url) }}" width="100%" height="300px"></iframe>
                        </div>
                        <div class="certificate-info">
                            <h3>{{ $cert->title }}</h3>
                            <p><strong>Platform:</strong> {{ $cert->platform }}</p>
                            <p><strong>Institution:</strong> {{ $cert->institution }}</p>
                            <p class="issue-date">Issued on
                                {{ \Carbon\Carbon::parse($cert->issue_date)->format('F j, Y') }}</p>
                        </div>
                        <div class="certificate-actions">
                            <a href="{{ asset('storage/' . $cert->pdf_url) }}" class="btn view" target="_blank">📄
                                Fullscreen</a>
                            <a href="{{ $cert->verify_url }}" class="btn verify" target="_blank">✅ Verify</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Contact Me --}}
        <section id="contact" class="contact-section">
            <h2 class="section-title">📬 Contact Me</h2>

            @if (session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert-error">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('contact.send') }}" class="contact-form">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn-send">🚀 Send Message</button>
            </form>
        </section>

    </div>
@endsection
