
/**
 * ====================
 * make limt of excerpt posts
 * ====================
 */
let post_excerpt = document.getElementsByName('excerpt')

let filter_posts = post_excerpt.forEach(e =>
    {
        if(e.innerText.length > 50)
        {
            e.innerText = e.innerText.substring(0 , 50) + "..."

        }
    })


/**
 * ====================
 * make limt of excerpt posts
 * ====================
 */

let posts          = document.getElementById('posts')
let posts_category = document.querySelectorAll('[name="posts"]')
let map_content    = document.getElementById('map-content')
let category_tap   = document.querySelectorAll('[name="link-category"]')

document.onclick = event =>
    {
        if(event.target.id === 'link-map' )
            {
                // stop the links working
                event.preventDefault()

                // remove the active calss
                category_tap.forEach(e =>
                    {
                        e.classList.remove('activ-category')
                    })
                    // add the activ calss to this elemtn
                    event.target.classList.add('activ-category')
                    // hid the  div content
                    posts.style.display = 'none'
                    posts_category.forEach( div =>
                        {
                            div.style.display = 'none'
                        })

            }
        if(event.target.id === 'link-posts' )
            {
                // stop the links working
                event.preventDefault()

                // remove the active calss
                category_tap.forEach(e =>
                    {
                        e.classList.remove('activ-category')
                    })
                    // add the activ calss to this elemtn
                    event.target.classList.add('activ-category')
                    // hid the  div content
                    posts.style.display = 'block'
                    posts_category.forEach( div =>
                        {
                            div.style.display = 'block  '
                        })
            }
    }




