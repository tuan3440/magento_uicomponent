<?php


namespace Mageplaza\HelloWorld\Ui\Component\Listing\Column\Status;


use Magento\Framework\Data\OptionSourceInterface;
use Mageplaza\HelloWorld\Model\Post;

/**
 * Class Options for Listing Column Status
 */
class Options implements OptionSourceInterface
{
    /**
     * @var array
     */
    protected $options;

    protected $post;

    /**
     * Options constructor.
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->post->getAvailableStatuses();
        $option = [];
        foreach ($availableOptions as $key => $value) {
            $option[] = [
                'label' => $value,
                'value' => $key
            ];
        }
        return $option;
    }
}

