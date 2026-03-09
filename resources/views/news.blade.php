@include('templates.header')
@include('templates.navigation')

<main class="container">
    <h1>Ons laatste nieuws</h1>

    <div class="news-grid">

        @php
            $newsItems = [
                [
                    'title' => 'Latest Updates',
                    'description' => 'Stay informed with our latest news and updates from around the world.',
                    'image' => asset('images/illustratiefoto_SD.jpg'),
                    'link' => '#'
                ],
                [
                    'title' => 'Technology Trends',
                    'description' => 'Discover the latest trends and innovations in technology for 2026.',
                    'image' => asset('images/illustratiefoto_SD.jpg'),
                    'link' => '#'
                ],
                [
                    'title' => 'Community Events',
                    'description' => 'Join us at upcoming community events and networking opportunities.',
                    'image' => asset('images/illustratiefoto_SD.jpg'),
                    'link' => '#'
                ],
                [
                    'title' => 'Business Insights',
                    'description' => 'Expert analysis and insights on current business developments.',
                    'image' => asset('images/illustratiefoto_SD.jpg'),
                    'link' => '#'
                ],
                [
                    'title' => 'Feature Spotlight',
                    'description' => 'Highlighting special features and updates you should know about.',
                    'image' => asset('images/illustratiefoto_SD.jpg'),
                    'link' => '#'
                ],
                [
                    'title' => 'Success Stories',
                    'description' => 'Read inspiring success stories from our community members.',
                    'image' => asset('images/illustratiefoto_SD.jpg'),
                    'link' => '#'
                ],
            ];
        @endphp

        @foreach($newsItems as $item)
            <a class="news-page-links" href="{{ $item['link'] }}">
                <div class="news-page-item">
                    <div class="news-page-image">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                    </div>
                    <div class="news-page-content">
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                        <span class="news-page-link">
                            Read More →
                        </span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</main>

@include('templates.footer')