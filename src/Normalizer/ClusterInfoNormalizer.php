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
class ClusterInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ClusterInfo') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ClusterInfo) {
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
        $object = new \DockerPhpClient\Model\ClusterInfo();
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Version')) {
            $object->setVersion($this->denormalizer->denormalize($data->{'Version'}, 'DockerPhpClient\\Model\\ObjectVersion', 'json', $context));
        }
        if (property_exists($data, 'CreatedAt')) {
            $object->setCreatedAt($data->{'CreatedAt'});
        }
        if (property_exists($data, 'UpdatedAt')) {
            $object->setUpdatedAt($data->{'UpdatedAt'});
        }
        if (property_exists($data, 'Spec')) {
            $object->setSpec($this->denormalizer->denormalize($data->{'Spec'}, 'DockerPhpClient\\Model\\SwarmSpec', 'json', $context));
        }
        if (property_exists($data, 'TLSInfo')) {
            $object->setTLSInfo($this->denormalizer->denormalize($data->{'TLSInfo'}, 'DockerPhpClient\\Model\\TLSInfo', 'json', $context));
        }
        if (property_exists($data, 'RootRotationInProgress')) {
            $object->setRootRotationInProgress($data->{'RootRotationInProgress'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'CreatedAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'UpdatedAt'} = $object->getUpdatedAt();
        }
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getTLSInfo()) {
            $data->{'TLSInfo'} = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
        }
        if (null !== $object->getRootRotationInProgress()) {
            $data->{'RootRotationInProgress'} = $object->getRootRotationInProgress();
        }
        return $data;
    }
}