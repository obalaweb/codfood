<div class="sb-grid-item sb-item-25 {{ strtolower($menu->category->id) }}">
    <a data-fancybox="menu" data-no-swup href="{{ $menu->getFirstMediaUrl() }}" class="sb-menu-item sb-mb-30">
      <div class="sb-cover-frame">
        <img src="{{ $menu->getFirstMediaUrl() }}" alt="product">
      </div>
      <div class="sb-card-tp">
        <h4 class="sb-card-title">{{ $menu->name }}</h4>
        <div class="sb-price"><sub>$</sub> {{ number_format($menu->price/1000, 1) }}</div>
      </div>
      <div class="sb-description">
        <p class="sb-text sb-mb-15">
          @forelse ($menu->ingredients as $ingredient)
          <span>{{ $ingredient->name }}</span>
          @empty
            <span>No ingredient</span>
          @endforelse ()
        </p>
        <ul class="sb-stars">
          <li><i class="fas fa-star"></i></li>
          <li><i class="fas fa-star"></i></li>
          <li><i class="fas fa-star"></i></li>
          <li><i class="fas fa-star"></i></li>
          <li><i class="fas fa-star"></i></li>
          <li><span>(4 ratings)</span></li>
        </ul>
      </div>
    </a>
  </div>