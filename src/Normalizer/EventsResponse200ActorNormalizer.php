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
class EventsResponse200ActorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\EventsResponse200Actor') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\EventsResponse200Actor) {
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
        $object = new \DockerPhpClient\Model\EventsResponse200Actor();
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Attributes')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Attributes'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setAttributes($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getAttributes()) {
            $values = new \stdClass();
            foreach ($object->getAttributes() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Attributes'} = $values;
        }
        return $data;
    }
}