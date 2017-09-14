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
class ImageRootFSNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ImageRootFS') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ImageRootFS) {
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
        $object = new \DockerPhpClient\Model\ImageRootFS();
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        if (property_exists($data, 'Layers')) {
            $values = array();
            foreach ($data->{'Layers'} as $value) {
                $values[] = $value;
            }
            $object->setLayers($values);
        }
        if (property_exists($data, 'BaseLayer')) {
            $object->setBaseLayer($data->{'BaseLayer'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        if (null !== $object->getLayers()) {
            $values = array();
            foreach ($object->getLayers() as $value) {
                $values[] = $value;
            }
            $data->{'Layers'} = $values;
        }
        if (null !== $object->getBaseLayer()) {
            $data->{'BaseLayer'} = $object->getBaseLayer();
        }
        return $data;
    }
}