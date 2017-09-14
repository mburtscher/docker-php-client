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
class VersionResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\VersionResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\VersionResponse200) {
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
        $object = new \DockerPhpClient\Model\VersionResponse200();
        if (property_exists($data, 'Version')) {
            $object->setVersion($data->{'Version'});
        }
        if (property_exists($data, 'ApiVersion')) {
            $object->setApiVersion($data->{'ApiVersion'});
        }
        if (property_exists($data, 'MinAPIVersion')) {
            $object->setMinAPIVersion($data->{'MinAPIVersion'});
        }
        if (property_exists($data, 'GitCommit')) {
            $object->setGitCommit($data->{'GitCommit'});
        }
        if (property_exists($data, 'GoVersion')) {
            $object->setGoVersion($data->{'GoVersion'});
        }
        if (property_exists($data, 'Os')) {
            $object->setOs($data->{'Os'});
        }
        if (property_exists($data, 'Arch')) {
            $object->setArch($data->{'Arch'});
        }
        if (property_exists($data, 'KernelVersion')) {
            $object->setKernelVersion($data->{'KernelVersion'});
        }
        if (property_exists($data, 'Experimental')) {
            $object->setExperimental($data->{'Experimental'});
        }
        if (property_exists($data, 'BuildTime')) {
            $object->setBuildTime($data->{'BuildTime'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $object->getVersion();
        }
        if (null !== $object->getApiVersion()) {
            $data->{'ApiVersion'} = $object->getApiVersion();
        }
        if (null !== $object->getMinAPIVersion()) {
            $data->{'MinAPIVersion'} = $object->getMinAPIVersion();
        }
        if (null !== $object->getGitCommit()) {
            $data->{'GitCommit'} = $object->getGitCommit();
        }
        if (null !== $object->getGoVersion()) {
            $data->{'GoVersion'} = $object->getGoVersion();
        }
        if (null !== $object->getOs()) {
            $data->{'Os'} = $object->getOs();
        }
        if (null !== $object->getArch()) {
            $data->{'Arch'} = $object->getArch();
        }
        if (null !== $object->getKernelVersion()) {
            $data->{'KernelVersion'} = $object->getKernelVersion();
        }
        if (null !== $object->getExperimental()) {
            $data->{'Experimental'} = $object->getExperimental();
        }
        if (null !== $object->getBuildTime()) {
            $data->{'BuildTime'} = $object->getBuildTime();
        }
        return $data;
    }
}