<?php

class __Mustache_2c3d719ea27b8c1c982a520c7d7fc6c2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'sliderenabled' section
        $value = $context->find('sliderenabled');
        $buffer .= $this->sectionA68390a58f651758375bcd0c3f994a27($context, $indent, $value);

        return $buffer;
    }

    private function section39fafbade5b4daabdb3367e1272d1046(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="active"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="active"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28c167992424ab9a0ecbf425cc03025e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li data-target="#mooveslideshow" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li data-target="#mooveslideshow" data-slide-to="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $value);
                $buffer .= '></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB776e185f39831c09db4c21d623851c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2 class="title">{{{ title }}}</h2>';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2 class="title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32815430606f0c4d6328720ea77f5488(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="caption">{{{ caption }}}</div>';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="caption">';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18a665bb3af49189eac2f714d1995c39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="carousel-item {{#active}}active{{/active}}">
                    <img class="d-block w-100 animated fadeIn" src="{{{ image }}}">

                    <div class="carousel-caption animated fadeInRightBig">
                        {{#title}}<h2 class="title">{{{ title }}}</h2>{{/title}}

                        {{#caption}}<div class="caption">{{{ caption }}}</div>{{/caption}}
                    </div>
                </div>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="carousel-item ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <img class="d-block w-100 animated fadeIn" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="carousel-caption animated fadeInRightBig">
';
                $buffer .= $indent . '                        ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->sectionB776e185f39831c09db4c21d623851c6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        ';
                // 'caption' section
                $value = $context->find('caption');
                $buffer .= $this->section32815430606f0c4d6328720ea77f5488($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3742088b74a5eb0b06ca1e5afe466c15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\', \'theme_boost/bootstrap/carousel\'], function($, carousel) {
            $(\'#mooveslideshow\').carousel({
                interval: 5000,
                pause: \'hover\'
            });
        })
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        require([\'jquery\', \'theme_boost/bootstrap/carousel\'], function($, carousel) {
';
                $buffer .= $indent . '            $(\'#mooveslideshow\').carousel({
';
                $buffer .= $indent . '                interval: 5000,
';
                $buffer .= $indent . '                pause: \'hover\'
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        })
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA68390a58f651758375bcd0c3f994a27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="mooveslideshow" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            {{#slides}}
                <li data-target="#mooveslideshow" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            {{/slides}}
        </ol>
        <div class="carousel-inner">
            {{#slides}}
                <div class="carousel-item {{#active}}active{{/active}}">
                    <img class="d-block w-100 animated fadeIn" src="{{{ image }}}">

                    <div class="carousel-caption animated fadeInRightBig">
                        {{#title}}<h2 class="title">{{{ title }}}</h2>{{/title}}

                        {{#caption}}<div class="caption">{{{ caption }}}</div>{{/caption}}
                    </div>
                </div>
            {{/slides}}
        </div>
    </div>
    {{#js}}
        require([\'jquery\', \'theme_boost/bootstrap/carousel\'], function($, carousel) {
            $(\'#mooveslideshow\').carousel({
                interval: 5000,
                pause: \'hover\'
            });
        })
    {{/js}}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="mooveslideshow" class="carousel slide" data-ride="carousel" data-interval="5000">
';
                $buffer .= $indent . '        <ol class="carousel-indicators">
';
                // 'slides' section
                $value = $context->find('slides');
                $buffer .= $this->section28c167992424ab9a0ecbf425cc03025e($context, $indent, $value);
                $buffer .= $indent . '        </ol>
';
                $buffer .= $indent . '        <div class="carousel-inner">
';
                // 'slides' section
                $value = $context->find('slides');
                $buffer .= $this->section18a665bb3af49189eac2f714d1995c39($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section3742088b74a5eb0b06ca1e5afe466c15($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
