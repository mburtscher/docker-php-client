<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TaskSpecRestartPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\TaskSpecRestartPolicy') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\TaskSpecRestartPolicy) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\TaskSpecRestartPolicy();
        if (property_exists($data, 'Condition')) {
            $object->setCondition($data->{'Condition'});
        }
        if (property_exists($data, 'Delay')) {
            $object->setDelay($data->{'Delay'});
        }
        if (property_exists($data, 'MaxAttempts')) {
            $object->setMaxAttempts($data->{'MaxAttempts'});
        }
        if (property_exists($data, 'Window')) {
            $object->setWindow($data->{'Window'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCondition()) {
            $data->{'Condition'} = $object->getCondition();
        }
        if (null !== $object->getDelay()) {
            $data->{'Delay'} = $object->getDelay();
        }
        if (null !== $object->getMaxAttempts()) {
            $data->{'MaxAttempts'} = $object->getMaxAttempts();
        }
        if (null !== $object->getWindow()) {
            $data->{'Window'} = $object->getWindow();
        }
        return $data;
    }
}