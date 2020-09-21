<?php

class __Mustache_8a6ca673a5710c48e199630deda5ad18 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'sponsorsfrontpage' section
        $value = $context->find('sponsorsfrontpage');
        $buffer .= $this->section5b32956e59b7a7c27123e9af81bf9488($context, $indent, $value);
        // 'clientsfrontpage' section
        $value = $context->find('clientsfrontpage');
        $buffer .= $this->section81a7ec2c13454085f5e953fec28048ea($context, $indent, $value);

        return $buffer;
    }

    private function sectionCe6359b8dd3d3e905c38defece8cf4c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="item">
                <a href="{{{url}}}">
                    <img src="{{{image}}}" title="{{{url}}}"/>
                </a>
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
                
                $buffer .= $indent . '            <div class="item">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '"/>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b32956e59b7a7c27123e9af81bf9488(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container frontpage-sponsors">
        <h2>{{{sponsorstitle}}}</h2>
        <p>{{{sponsorssubtitle}}}</p>
        <div class="row">
            {{#sponsors}}
            <div class="item">
                <a href="{{{url}}}">
                    <img src="{{{image}}}" title="{{{url}}}"/>
                </a>
            </div>
            {{/sponsors}}
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
                
                $buffer .= $indent . '    <div class="container frontpage-sponsors">
';
                $buffer .= $indent . '        <h2>';
                $value = $this->resolveValue($context->find('sponsorstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('sponsorssubtitle'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '        <div class="row">
';
                // 'sponsors' section
                $value = $context->find('sponsors');
                $buffer .= $this->sectionCe6359b8dd3d3e905c38defece8cf4c5($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF361feba2286ca4a6ac0f86aaa0a6fa5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="item">
                    <a href="{{{url}}}">
                        <img src="{{{image}}}" title="{{{url}}}"/>
                    </a>
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
                
                $buffer .= $indent . '                <div class="item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '"/>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81a7ec2c13454085f5e953fec28048ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container frontpage-clients">
        <h2>{{{clientstitle}}}</h2>
        <p>{{{clientssubtitle}}}</p>
        <div class="row">
            {{#clients}}
                <div class="item">
                    <a href="{{{url}}}">
                        <img src="{{{image}}}" title="{{{url}}}"/>
                    </a>
                </div>
            {{/clients}}
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
                
                $buffer .= $indent . '    <div class="container frontpage-clients">
';
                $buffer .= $indent . '        <h2>';
                $value = $this->resolveValue($context->find('clientstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('clientssubtitle'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '        <div class="row">
';
                // 'clients' section
                $value = $context->find('clients');
                $buffer .= $this->sectionF361feba2286ca4a6ac0f86aaa0a6fa5($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
