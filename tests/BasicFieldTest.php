<?php

use Corcel\Acf\Field\Basic\Text;
use Corcel\Acf\Field\Basic\Textarea;
use Corcel\Post;

/**
 * Class BasicFieldTest
 *
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class BasicFieldTest extends PHPUnit_Framework_TestCase 
{
    /**
     * @var Post
     */
    protected $post;

    /**
     * Setup a base $this->post object to represent the page with the basic fields
     */
    protected function setUp()
    {
        $this->post = Post::find(11); // it' a page with the custom fields
    }

    public function testTextFieldValue()
    {
        $text = new Text($this->post, 'fake_text');
        $this->assertEquals('Proin eget tortor risus', $text->get());
    }

    public function testTextareaFieldValue()
    {
        $text = new Textarea($this->post, 'fake_textarea');
        $this->assertEquals('Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', $text->get());
    }
}
