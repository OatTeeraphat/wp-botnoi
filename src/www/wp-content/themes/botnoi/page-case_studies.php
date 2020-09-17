<?php 
    /* 
    Template Name: Case Studies Page
    */
    get_header();

    $case_response = file_get_contents('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fmedium.com%2Ffeed%2Fbotnoi-classroom&api_key=zu9i6ayibkcmm8xwrclonghbacezgpvzirzv7uso&order_by=pubDate&count=6');
    $case_response = json_decode($case_response, true);

?>

        <!-- Hero -->
        <section class="home_hero" id="hero">
            
            <div class="container">

                <div class="row">
                    <div class="col-12 home_hero-content">
                        <div class="row">
                            <div class="col-12 col-lg-7 pt-5 mt-5">
                                <?php the_field('hero_content'); ?>
                                <?php if ( get_field('hero_btn')['hero_btn_title'] != "" ) : ?>
                                    <a class="btn btn-primary text-dark btn-lg mt-3" href="<?php echo get_field('hero_btn')['hero_btn_link'] ?>" ><?php echo get_field('hero_btn')['hero_btn_title'] ?></a>
                                <?php endif;?>
                            </div>
                            <img class="case_studt_hero-image d-none d-lg-block" src="<?php the_field('hero_image'); ?>" alt="">
                        </div>
                    </div>
                </div>

            </div>
            
        </section>
        <!-- .Hero -->


        <!-- Example -->
        <section class="case_study_use_case">
            <div class="container">

                <div class="row text-white justify-content-center">
                    <h2 class="mb-4">Use Cases</h2>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11 col-md-12 filters-group-wrap">
                            <div class="filters-group">
                                <div class="row justify-content-center mb-5 filter-options">
									<button class="btn btn-white btn-hover-primary mb-3 mx-3 active" data-group="all">
										All Case
									</button>
									<?php
									
									$post = get_field('case_studies', 'option');
									$terms = get_terms( array(
										'taxonomy' => 'post_tag',
										'hide_empty' => false,
									) );
									
									foreach ($terms as $terms_key => $term) :
									?>
										<button class="btn btn-white btn-hover-primary mb-3 mx-3" data-group="<?php echo $term->name; ?>">
											<?php echo $term->name; ?>
										</button>
									<?php 
									endforeach;
									?>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div id="grid" class="row justify-content-center my-shuffle-container">
                        
                        <?php
                        //$post = array_slice($case_response['items'], 0, 6);
						foreach ($post as $key => $value) :
						
						$tag = [];
						$tag = array_map(function($x) {return $x->name;}, $value['tag']);
						
                        ?> 
						
                        <div class="col-12 col-lg-4 col-md-6 mb-5 picture-item px-4 px-md-3" data-groups='<?php echo json_encode($tag, JSON_UNESCAPED_UNICODE); ?>' data-date-created="<?php echo substr($value['img']['date'], 0, 10); ?>" data-title="Lake Walchen">
                            <div class="card card-gradient">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center align-items-center mb-3 card-banner rounded">
                                        <img src="<?php echo $value['img']['sizes']['medium_large'];?>" />
                                    </div>
                                    <h3 class="mb-3">
                                        <?php echo $value['title']; ?>
                                    </h3>
                                    <p class="mb-3">
                                        <?php echo substr(strip_tags($value['desc']), 0, 500); ?>
                                        
                                    </p>
                                    <div class="card-button">
                                        <a href="<?php echo $value['url']; ?>" style="width: 100%;" class="btn btn-white btn-hover-primary">View more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                        endforeach; 
                        ?>
                        
                    </div>
                </div>

            </div>
        </section>
        <!-- .Example -->
        
        <script src="https://unpkg.com/shufflejs@5"></script>
        <script>

            var Shuffle = window.Shuffle;

            class Demo {

                constructor(element) {
                    this.element = element;
                    this.shuffle = new Shuffle(element, {
                    itemSelector: '.picture-item',
                    sizer: element.querySelector('.my-sizer-element'),
                    });

                    // Log events.
                    this.addShuffleEventListeners();
                    this._activeFilters = [];
                    this.addFilterButtons();
                    this.addSorting();
                    this.addSearchFilter();
                }

                /**
                * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
                * for them like you normally would (with jQuery for example).
                */
                addShuffleEventListeners() {
                    this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
                    console.log('layout. data:', data);
                    });
                    this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
                    console.log('removed. data:', data);
                    });
                }

                addFilterButtons() {
                    const options = document.querySelector('.filter-options');
                    if (!options) {
                    return;
                    }
                    
                    const filterButtons = Array.from(options.children);
                    const onClick = this._handleFilterClick.bind(this);
                    filterButtons.forEach((button) => {
                    button.addEventListener('click', onClick, false);
                    });
                }

                _handleFilterClick(evt) {
                    const btn = evt.currentTarget;
                    const isActive = btn.classList.contains('active');
                    const btnGroup = btn.getAttribute('data-group');
                    
                    this._removeActiveClassFromChildren(btn.parentNode);
                    
                    let filterGroup;
                    if (isActive) {
                    btn.classList.remove('active');
                    filterGroup = Shuffle.ALL_ITEMS;
                    } else {
                    btn.classList.add('active');
                    filterGroup = btnGroup;
                    }
                    
                    this.shuffle.filter(filterGroup);
                }

                _removeActiveClassFromChildren(parent) {
                    const { children } = parent;
                    for (let i = children.length - 1; i >= 0; i--) {
                    children[i].classList.remove('active');
                    }
                }

                addSorting() {
                    const buttonGroup = document.querySelector('.sort-options');
                    if (!buttonGroup) {
                    return;
                    }
                    buttonGroup.addEventListener('change', this._handleSortChange.bind(this));
                }

                _handleSortChange(evt) {
                    // Add and remove `active` class from buttons.
                    const buttons = Array.from(evt.currentTarget.children);
                    buttons.forEach((button) => {
                    if (button.querySelector('input').value === evt.target.value) {
                        button.classList.add('active');
                    } else {
                        button.classList.remove('active');
                    }
                    });
                    
                    // Create the sort options to give to Shuffle.
                    const { value } = evt.target;
                    let options = {};
                    
                    function sortByDate(element) {
                    return element.getAttribute('data-created');
                    }
                    
                    function sortByTitle(element) {
                    return element.getAttribute('data-title').toLowerCase();
                    }
                    
                    if (value === 'date-created') {
                    options = {
                        reverse: true,
                        by: sortByDate,
                    };
                    } else if (value === 'title') {
                    options = {
                        by: sortByTitle,
                    };
                    }
                    this.shuffle.sort(options);
                }

                // Advanced filtering
                addSearchFilter() {
                    const searchInput = document.querySelector('.js-shuffle-search');
                    if (!searchInput) {
                    return;
                    }
                    searchInput.addEventListener('keyup', this._handleSearchKeyup.bind(this));
                }

                /**
                * Filter the shuffle instance by items with a title that matches the search input.
                * @param {Event} evt Event object.
                */
                _handleSearchKeyup(evt) {
                    const searchText = evt.target.value.toLowerCase();
                    this.shuffle.filter((element, shuffle) => {
                    // If there is a current filter applied, ignore elements that don't match it.
                    if (shuffle.group !== Shuffle.ALL_ITEMS) {
                        // Get the item's groups.
                        const groups = JSON.parse(element.getAttribute('data-groups'));
                        const isElementInCurrentGroup = groups.indexOf(shuffle.group) !== -1;
                        // Only search elements in the current group
                        if (!isElementInCurrentGroup) {
                        return false;
                        }
                    }
                    const titleElement = element.querySelector('.picture-item__title');
                    const titleText = titleElement.textContent.toLowerCase().trim();
                    return titleText.indexOf(searchText) !== -1;
                    });
                }

            }

            document.addEventListener('DOMContentLoaded', () => {
                window.demo = new Demo(document.getElementById('grid'));
            });

        </script>

        

<?php
get_footer();
