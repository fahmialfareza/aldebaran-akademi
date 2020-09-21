<?php

class __Mustache_7ea79aadf884979f6b4f46c47dee5969 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/inc_start')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" class="container-fluid">
';
        $buffer .= $indent . '        <div id="page-header" class="frontpage-guest-header">
';
        $buffer .= $indent . '
';
        // 'sliderenabled' section
        $value = $context->find('sliderenabled');
        $buffer .= $this->section77e924cc8eb8b0b511815eb45257a8ae($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'sliderenabled' inverted section
        $value = $context->find('sliderenabled');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="row" id="loginbox">
';
            $buffer .= $indent . '                    <div class="col-sm-12 hidden-sm-down ';
            // 'disablefrontpageloginbox' section
            $value = $context->find('disablefrontpageloginbox');
            $buffer .= $this->sectionFcf804eb49bc60eefe137c8157d2814e($context, $indent, $value);
            // 'disablefrontpageloginbox' inverted section
            $value = $context->find('disablefrontpageloginbox');
            if (empty($value)) {
                
                $buffer .= 'col-md-7';
            }
            $buffer .= '" id="intro">
';
            // 'bannerheading' section
            $value = $context->find('bannerheading');
            $buffer .= $this->section6c3af77e1a41c3ba9003a7640103fc0f($context, $indent, $value);
            // 'bannercontent' section
            $value = $context->find('bannercontent');
            $buffer .= $this->section8e0578ab7774ff5f4220b977848f2b29($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            // 'disablefrontpageloginbox' inverted section
            $value = $context->find('disablefrontpageloginbox');
            if (empty($value)) {
                
                $buffer .= $indent . '                        <div class="col-12 col-sm-12 col-md-5 card d-none d-lg-block" id="boxForm">
';
                if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_login')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div><!-- end of .card-body -->
';
            }
            $buffer .= $indent . '                </div> <!-- end of #boxForm -->
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_marketing')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="container frontpage-maincontent">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_numbers')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_sponsorsclients')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/inc_end')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section96e153e2bb60201d43dbf6a78f8002fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>theme_moove/slideshow}}

                    {{^disablefrontpageloginbox}}
                        <div id="loginbox" class="d-none d-lg-block">
                            <div class="card" id="boxForm">
                                {{>theme_moove/frontpage_login}}
                            </div>
                        </div>
                    {{/disablefrontpageloginbox}}
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
                
                if ($partial = $this->mustache->loadPartial('theme_moove/slideshow')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '
';
                // 'disablefrontpageloginbox' inverted section
                $value = $context->find('disablefrontpageloginbox');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div id="loginbox" class="d-none d-lg-block">
';
                    $buffer .= $indent . '                            <div class="card" id="boxForm">
';
                    if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_login')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                ');
                    }
                    $buffer .= $indent . '                            </div>
';
                    $buffer .= $indent . '                        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section77e924cc8eb8b0b511815eb45257a8ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#sliderfrontpage}}
                    {{>theme_moove/slideshow}}

                    {{^disablefrontpageloginbox}}
                        <div id="loginbox" class="d-none d-lg-block">
                            <div class="card" id="boxForm">
                                {{>theme_moove/frontpage_login}}
                            </div>
                        </div>
                    {{/disablefrontpageloginbox}}
                {{/sliderfrontpage}}
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
                
                // 'sliderfrontpage' section
                $value = $context->find('sliderfrontpage');
                $buffer .= $this->section96e153e2bb60201d43dbf6a78f8002fa($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcf804eb49bc60eefe137c8157d2814e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-md-12';
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
                
                $buffer .= 'col-md-12';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c3af77e1a41c3ba9003a7640103fc0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h1>{{{ bannerheading }}}</h1>
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
                
                $buffer .= $indent . '                            <h1>';
                $value = $this->resolveValue($context->find('bannerheading'), $context);
                $buffer .= $value;
                $buffer .= '</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e0578ab7774ff5f4220b977848f2b29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h2>{{{ bannercontent }}}</h2>
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
                
                $buffer .= $indent . '                            <h2>';
                $value = $this->resolveValue($context->find('bannercontent'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
